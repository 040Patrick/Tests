<?php 
declare(strict_types=1);
namespace App\Validate;

use App\Validate\Contracts\ValidateInterface;
use Exception;
use ReflectionAttribute;
use ReflectionClass;



class Validate
{
    public function Validator(object $object): void 
    {
       $reflection = new ReflectionClass($object);
       $Props = $reflection->getProperties();

       foreach ($Props as $prop) {
        $attributeS = $prop->getAttributes(
            ValidateInterface::class,
            ReflectionAttribute::IS_INSTANCEOF
        );


        foreach ($attributeS as $attribute) {
            $instance = $attribute->newInstance();

            $prop->setAccessible(true);

            $value = $prop->getValue($object);

            try{
                $instance->Validate($value);
            }
            catch(Exception $e)
            {
                throw new Exception("Erro ao validar" . $prop->getName(). PHP_EOL . $e->getMessage());
            }
        }
       }
    }
}
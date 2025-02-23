<?php 
declare(strict_types=1);
namespace App\Validate\Attributes;
use App\Validate\Contracts\ValidateInterface;
use Exception;

class Required implements ValidateInterface
{
    public function Validate(string $value): void
    {
        if(empty($value))
        {
            throw new Exception('Todos os campos precisam ser preenchidos');
        }
    }
}
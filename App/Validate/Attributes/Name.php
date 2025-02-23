<?php 
declare(strict_types=1);
namespace App\Validate\Attributes;

use App\Validate\Contracts\ValidateInterface;
use Exception;
use InvalidArgumentException;


class Name implements ValidateInterface
{
    public function validate(string $value): void
    {
        $pattern = '/^[a-z_]{8,40}$/';

        if (!preg_match($pattern, $value)) {
                // Exceção lançada com uma mensagem de erro
                throw new InvalidArgumentException('Nome precisa ter entre 8 e 40 letras e um caractere "_"');
        }
    }
}

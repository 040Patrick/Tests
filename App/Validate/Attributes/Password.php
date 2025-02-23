<?php 
declare(strict_types=1);
namespace App\Validate\Attributes;

use App\Validate\Contracts\ValidateInterface;
use InvalidArgumentException;

class Password implements ValidateInterface
{
    public function validate(string $value): void
    {
        $pattern = '/^[a-z0-9_]{10,25}$/';

        if (!preg_match($pattern, $value)) {
            throw new InvalidArgumentException('A senha precisa ter entre 10 e 25 caracteres e pode conter letras minúsculas, números e o caractere "_".');
        }
    }
}

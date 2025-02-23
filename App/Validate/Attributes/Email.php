<?php 
declare(strict_types=1);
namespace App\Validate\Attributes;
use App\Validate\Contracts\ValidateInterface;
use InvalidArgumentException;



class Email implements ValidateInterface
{
    public function Validate(string $value): void
    {
        $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/';

        if(!preg_match($pattern, $value))
        {
            throw new InvalidArgumentException('Email Invalido');
        }
    }
}

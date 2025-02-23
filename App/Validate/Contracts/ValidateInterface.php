<?php 
declare(strict_types=1);
namespace App\Validate\Contracts;




interface ValidateInterface 
{
    public function Validate(string $value): void ;
}
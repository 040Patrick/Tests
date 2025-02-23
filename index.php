<?php 
declare(strict_types=1);
require_once __DIR__ . "/vendor/autoload.php";
use App\Validate\Validate;
use App\Model\User;

$user = new User(
    'Patrick',
    'Rescarolli',
    'PatrickRescarolli5@gmail.com',
    '55089910',
);


$Validate = new Validate();
$Validate->validator($user);
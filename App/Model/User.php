<?php 
declare(strict_types=1);
namespace App\Model;

use App\Validate\Attributes\Email;
use App\Validate\Attributes\Required;
use App\Validate\Attributes\Name;
use App\Validate\Attributes\Password;

readonly final class User 
{

    public function __construct(
        #[Required, Name]
        protected string $name,
        #[Required, Name]
        protected string $midname,
        #[Required, Email]
        protected string $email,
        #[Required, Password]
        protected string $password,
    ){
        
    }
    

}
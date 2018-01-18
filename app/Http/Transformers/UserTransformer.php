<?php
namespace App\Http\Transformers;
use App\User;
use JWTAuth;
use Illuminate\Http\Request;


trait UserTransformer
{

	 /*......login response starts here.....*/
    
/**
 * @transformercollection \Mpociot\ApiDoc\Tests\Fixtures\TestTransformer
 */
    public function loginResponse($user)
    {
        return [
            'name' => $user['name'] ? $user['name'] : '',
            'email' => $user['email'] ? $user['email'] : '',
           	'role'  => $user['role'] == 1 ? 'Admin': 'Sale Person' ,
            'token' => $user['token']
        ];
    }

     /*.........login response starts here.....*/
}


?>
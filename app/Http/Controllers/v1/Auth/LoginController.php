<?php

namespace App\Http\Controllers\v1\Auth;

use App\Http\Controllers\v1\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Helpers\MainHelper;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Transformers\UserTransformer;
// use \Mpociot\ApiDoc\Tests\Fixtures\TestTransformer\UserTransformer;
/**
 * @resource
 *
 * Longer description
 */

class LoginController extends Controller
{
    use MainHelper;
    use UserTransformer;
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

/**
 * @response {
 *  data: [],
 *}
 */
    public function login(Request $request){

        if (!isset($request->email)) {
                return $this->respondNotFound('Please provide an email!', 'object', 422);
            }

            if (!isset($request->password)) {
                return $this->respondNotFound('Please provide a password!', 'object', 422);
            }

            $credentials = $request->only('email', 'password');
            $token = null;

         if (!$token = JWTAuth::attempt($credentials)) {
                return $this->respondInternalError( 'Invalid email or password!', 'object', 400);
            }

               $user = JWTAuth::toUser($token);

               if (!$user) {  
                return $this->respondNotFound('Unauthorised access!', 'object', 204);
            }

             $user->token = $token;

            return $this->setStatusCode(200)->respond([
                'status'=>200,
                'result'=> true,
                'error'=> false,
                'message' => 'Login Successfully.',
                'data'=> $this->loginResponse($user->toArray())
            ]);

        
    }

}

<?php

namespace App\Http\Controllers\v1\Auth;

use App\Http\Controllers\v1\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Helpers\ErrorHelper;
use App\User;
use App\Http\Requests\RegisterRequest;

/**
 * @resource 
 *
 * Longer description
 */
class RegisterController extends Controller
{
    use ErrorHelper;
    
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

/*Register Using Api starts here.....*/

/**
 * @response {
 *  data: [],
 *}
 */
   public function register(Request $request)
    {
        
        try
        {
            
            $data = $request->all();
            
            $validator = $this->validator($data);
            if ($validator->fails()) 
            {
                $messages = $validator->messages()->toArray();
                /*..Sending custom error response...*/
                return $this->respondNotFound($this->getErrorResponse($messages), 'object', 422);
            }
            /*Register details in database starts here....*/
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ]);
            /*Register details in database ends here....*/
            if($user)
            {
                return $this->apiRespond($user,$message ='Register Succesfully');//send response with message
            }

        }catch(Exception $e)
        {
            return $this->respondInternalError();
        }
        
    }

/*Register Using Api ends here.....*/

}

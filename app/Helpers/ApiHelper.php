<?php
namespace App\Helpers;

use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use App\Lead;

trait ApiHelper
{
	protected $user;
    protected $statusCode = 200;

/**
 * @response {
 *  data: [],
 *}
 */
    public function getAuthUser(Request $request)
    {
    	$user = JWTAuth::toUser($request->header('token'));

    	return response()->json($user);
    }
/**
 * @response {
 *  data: [],
 *}
 */
    public function isAdmin(Request $request)
    {
    	
    	$user = $this->getAuthUser($request);
    	
    	if($user->getData()->role == 1)
    	{
			return true;
    	}
    	return false;
    }
/**
 * @response {
 *  data: [],
 *}
 */
    public function getLeads($id,$lead_id)
    {
        $leads = Lead::where($id,$lead_id)->get();

        return $leads;
    }
/**
 * @response {
 *  data: [],
 *}
 */
    public function getUserName($id,$user_id)
    {
        $user_name = User::where($id,$user_id)->get();
        return $user_name;
    }

}
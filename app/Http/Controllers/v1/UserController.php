<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;//for request
use App\Helpers\MainHelper;//for custom functiom
use App\User;//for user model

/**
 * @resource
 *
 * Longer description
 */

class UserController extends Controller
{
    use MainHelper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    

    public function index(Request $request)
    {

        if($this->isAdmin($request))
        {

            $user =  User::get();
            if($user)
            {
                return $this->apiRespond($user,$message='Data Fetch Succesfully');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        try
        {
             $user = $this->getAuthUser($request);
            $user = User::find($id);
            if($user)
            {
                return $this->apiRespond($user,$message="Result Succesfully");
            }
        }catch(Exception $e)
        {
            return respondInternalServerError();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $this->getAuthUser($request);
        $data['name'] = $request->name;
        $data['email'] = $request->email;

        if (!isset($data['name'])) {
            return $this->respondNotFound('Please Enter Name!', 'object', 422);
        }

        if (!isset($data['email'])) {
            return $this->respondNotFound('Please Enter a email!', 'object', 422);
        }

        $updateUser = User::where('id', $id)->update(['name'=>$data['name'],'email'=>$data['email']]);
        if($updateUser)
        {
             return $this->apiRespond($data,$message ='Update Succesfully');//send
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        try
        {
            if($this->isAdmin($request))
            {
                $user = User::find($id);//find user using id
                $delete = $user->delete();//delete user
                if($delete)
                {
                    return $this->apiRespond($delete,$message ='Delete Succesfully');//send response with message
                }
            }
        }catch(Exception $e)
        {
            return respondInternalServerError();
        }
        
    }
}

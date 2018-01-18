<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Helpers\MainHelper;
use App\Status;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StatusRequest;
/**
 * @resource 
 *
 * Longer description
 */

class StatusController extends Controller
{
    use MainHelper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    


    /**
     * This is the short description [and should be unique as anchor tags link to this in navigation menu]
     *
     * This can be an optional longer description of your API call, used within the documentation.
     *
     */
    public function index(Request $request)
    {
       try
       {
            if($this->isAdmin($request))
            {
                $status = Status::get();
                if($status)
                {
                    return $this->apiRespond($status,$message='Data Fetch Succesfully');
                }
            }


       }catch(Exception $e)
       {
             return $this->respondInternalError();
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
        /**
 * @response {
 *  data: [],
 *}
 */
    public function store(StatusRequest $request)
    {

        try
        {

                $is_admin = $this->isAdmin($request);//for check admin or not
                if($is_admin)
                {

                    $data  = $request->all();

                    $status = Status::create($data);
                    if($status)
                    {
                        return $this->apiRespond($status,$message ='Status Inserted Succesfully');//send response with message
                    }
                }else{
                    return $this->respondNotFound('You Have Not Allowed to create Status', 'object', 403);
                }
                
                
            
                
            
            

        }catch(Exception $e)
        {
            return $this->respondInternalError();
        }
        
        
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
            $user = $this->getAuthUser($request);//for authinticate
            $data = Status::find($id);//find data using id
            if($data)
            { /*Response data with message*/
                return $this->apiRespond($data,$message='Result Succesully');
            }else
            {
                return $this->checkErrorResponse($note, 'Status not exists', 'object', 404);
            }
        }catch(Exception $e)
        {
            return $this->respondInternalError();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StatusRequest $request,$id)
    {
        $user = $this->getAuthUser($request);//for authinticate
        $data = $request->all();
        $updateStatus = Status::where('id', $id)->update(['name'=>$data['name']]);
        if($updateStatus)
        {
            return $this->apiRespond($data['name'],$message ='Update Succesfully');//send response with message
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $user = $this->getAuthUser($request);//for authinticate
            $status = Status::find($id);//find id
            $delete = $status->delete(); //delete data from table
            if($delete)
            {
                return $this->apiRespond($delete,$message ='Delete Succesfully');//send response with message
            }
        }catch(Exception $e)
        {
            return $this->respondInternalError();
        }
        
    }
}

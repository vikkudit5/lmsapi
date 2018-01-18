<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\MainHelper;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Status;
use App\Lead;
use App\User;
use App\Http\Requests\LeadRequest;

/**
 * @resource
 *
 * Longer description
 */
class LeadController extends Controller
{
    use MainHelper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(Lead $leads)
    {
        
        $this->lead = $leads;
       
    }

   /**
     * This is the short description [and should be unique as anchor tags link to this in navigation menu]
     *
     * This can be an optional longer description of your API call, used within the documentation.
     *
     */

/**
 * @response {
 *  data: [1,2,3],
 *}
 */
    public function index(Request $request)
    {
       try
       {
            if($this->isAdmin($request))
            {
                
                $leads = $this->lead->get();
                if($leads)
                {
                    return $this->apiRespond($leads,$message='All Data Fetch succesfully');
                }
            }else
            {
                
                return $this->respondWithError('UnAuthorised Access', 'object', 403);
            }
       }catch(Exception $e)
       {
         return respondInternalError();
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
     *  data: ["123":"123"],
     *}
     */
   
    public function store(LeadRequest $request)
    {
        try
        {
             
                $user = $this->getAuthUser($request);
                $user_id = $user->getData()->id;
                $data = $request->all();

                $lead = $this->lead->create($data);//insert data into database
                /*...For insert Pivot table lead_user starts here...*/
                $leads = $this->lead->find($lead->id);
                $leads->user()->attach($user_id);
                /*...For insert Pivot table lead_user ends here...*/
                
                if($lead)
                {
                     
                    return $this->apiRespond($lead,$message='Lead Generate Succesfully');
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

    /**
 * @response {
 *  data: [],
 *}
 */
    public function edit($id ,Request $request)
    {
         try
         {
            $user = $this->getAuthUser($request);
            $lead = Lead::find($id);
            if($lead)
            {
                return $this->apiRespond($lead,$message = "fetch Succesfully");
            }else
            {
                return $this->checkErrorResponse($note, 'Lead not exists', 'object', 404);
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

    /**
 * @response {
 *  data: [],
 *}
 */
    public function update(LeadRequest $request, $id)
    {
         
          try
          {

            $data = $request->all();

            $user = $this->getAuthUser($request);
            $updateStatus = Lead::where('id',$id)->update($data);
            if($updateStatus)
            {
                return $this->apiRespond($data,$message ='Upate Succesfully');
            }

          }catch(Exception $e){
            return $this->respondInternalError();
          }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
 * @response {
 *  data: [],
 *}
 */
    public function destroy($id,Request $request)
    {
        try
        {
            $user = $this->getAuthUser($request);
            
            $lead = Lead::find($id);
            $delete = $lead->delete();
            if($delete)
            {
                return $this->apiRespond($delete,$message="delete Succesfully");
            }
        }catch(Exception $e)
        {
            return $this->respondInternalError();
        }
    }
}

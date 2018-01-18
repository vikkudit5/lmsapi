<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\MainHelper;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Note;
use App\User;
use App\Http\Requests\NoteRequest;
/**
 * @resource
 *
 * Longer description
 */

class NoteController extends Controller
{
    use MainHelper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function index(Request $request)
    {
         try
         {
            $user = $this->getAuthUser($request);//for authinticate
            $note = Note::get();
            
            if($note)
            {
                return $this->apiRespond($note,$message='All Data Fetch succesfully');
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
    public function store(NoteRequest $request)
    {
        try
        {   
            $allData = $request->all();

            $user = $this->getAuthUser($request);//for authinticate
            $data['user_id'] = $user->getData()->id;//get user id
            $data['lead_id'] = $request->lead_id;
            $data['notes'] = $request->notes;
            $note = Note::create($data);//note insert
            if($note)
            {
                return $this->apiRespond($data,$message='Note Insert Sucessfully');
            }

        }catch(Exception $e)
        {
            return $this->respondInternalServer();
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
            $user = $this->getAuthUser($request);
            $note = Note::find($id);
            if($note)
            {
                return $this->apiRespond($note,$message='fetch Sucessfully');
            }else
            {
                return $this->checkErrorResponse($note, 'Note not exists', 'object', 404);
            }
        }catch(Exception $e)
        {
            return $this->respondInternalServer();
        }
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoteRequest $request, $id)
    {
        try
        {
            $user = $this->getAuthUser($request);
            $data = $request->all();
            $updateNote = Note::where('id',$id)->update($data);
            if($updateNote)
            {
                return $this->apiRespond($data,$message="update Sucessfully");
            }
            
        }catch(Exception $e)
        {
            return $this->respondInternalServer();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        try
        {
            $user = $this->getAuthUser($request);

            $note = Note::find($id);
            $deleteNote = $note->delete();
            if($deleteNote)
            {
                return $this->apiRespond($note,$message="delete Sucessfully");
            }
        }catch(Exception $e)
        {
            return $this->respondInternalServer();
        }
    }
}

<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\MainHelper;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;
use App\Comment;
use App\Http\Transformers\CommentTransformer as commentTransformer;

/**
 * @resource 
 *
 * Longer description
 */

class CommentController extends Controller
{

    use MainHelper;
    use commentTransformer;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(Comment $comments)
    {
        
        $this->comments = $comments;
       
    }

    public function index()
    {
        //
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
        try
        {
            $user = $this->getAuthUser($request);
            $user_id = $user->getData()->id;
            $userName = $this->getUserName('id',$user_id);
            $data['commented_by'] = $userName[0]['name'];
            $lead_id = $request->lead_id;
            $data['comment'] = $request->comment;
            if(empty($lead_id))
            {
                return $this->respondNotFound('Sorry,no lead selected!', 'object', 422);
            }
            if(empty($data['comment']))
            {
                return $this->respondNotFound('Please give any comment','object',422);
            }
            $lead = $this->getLeads('id', $lead_id);
            
            if(empty($lead->toArray()))
            {
                return $this->respondNotFound('Lead Id does not Exist','object',404);
            }

            $comment = $this->comments->create($data);
            $getComment = $comment->toArray();
            $comments = $this->comments->find($comment->id);
            $comments->lead()->attach($lead_id);
            if($comment)
            {
                return $this->setStatusCode(200)
                ->apiRespond($this->commentsTransform($getComment), 'You commented on this lead.');
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
            $commentEdit = $this->comments->where('id',$id)->get();

            if($commentEdit)
            {
                return $this->apiRespond($commentEdit,$message = "fetch Succesfully");
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
    public function update(Request $request, $id)
    {
        try
        {
            $user = $this->getAuthUser($request);
           $user_id = $user->getData()->id;
            $userName = $this->getUserName('id',$user_id);
            $data['commented_by'] = $userName[0]['name'];
            $lead_id = $request->lead_id;
            $data['comment'] = $request->comment;
            if(empty($lead_id))
            {
                return $this->respondNotFound('Sorry,no lead selected!', 'object', 422);
            }
            if(empty($data['comment']))
            {
                return $this->respondNotFound('Please give any comment','object',422);
            }
            $lead = $this->getLeads('id', $lead_id);
            
            if(empty($lead->toArray()))
            {
                return $this->respondNotFound('Lead Id does not Exist','object',404);
            }

            $comment = $this->comments->where('id',$id)->update($data);

          
            $comments = $this->comments->find($id);
            $comments->lead()->detach($lead_id);//remove pivot table
            $comments->lead()->attach($lead_id);//insert pivot table
            if($comment)
            {
                return $this->setStatusCode(200)
                ->apiRespond($this->commentsTransform($comment), 'You commented on this lead.');
            }

        }catch(Exception $e)
        {

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
        //
    }
}

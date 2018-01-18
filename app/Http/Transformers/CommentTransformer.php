<?php
namespace App\Http\Transformers;

use App\User;
use JWTAuth;
use Illuminate\Http\Request;
use Carbon\Carbon;


trait CommentTransformer 
{

    /*For transforming comments**/
    
    /**
 * @transformer \Mpociot\ApiDoc\Tests\Fixtures\TestTransformer
 */
    public function commentsTransform($data){
            
        $date = date('H:i a, j M Y', strtotime($data['created_at']));//for date format

        return [
            'id' =>  $data['id']? $data['id'] : '',
            'comment' =>  $data['comment']? $data['comment']: '',
            'commented_by'  =>  $data['commented_by'] ? $data['commented_by'] : '',
            'commented_on' => $data['created_at']? $date                 : ''
        ];
    }

}

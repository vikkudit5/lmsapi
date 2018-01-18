<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\User;
use JWTAuth;

trait ErrorHelper
{
	protected $statusCode = 200;
	protected function getStatusCode()
	{
		return $this->statusCode;
	}

	
/**
 * @response {
 *  data: [],
 *}
 */
	protected function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
		return $this;
	}

/**
 * @response {
 *  data: [],
 *}
 */
	protected function respond($data, $headers = [])
	{
		return Response::json($data, $this->getStatusCode(), $headers);
	}

/**
 * @response {
 *  data: [],
 *}
 */
    protected function respondNotFound($message = 'Not Found!', $dataType='object', $status=400)
	{
		return $this->setStatusCode(200)->respondWithError($message, $dataType,  $status);
	}

/**
 * @response {
 *  data: [],
 *}
 */
	protected function respondWithError($message, $dataType='object', $status=400)
	{
		if($dataType == 'object') {
			$data = new \stdClass();;
		}

		if($dataType == 'array') {
			$data = [];
		}

		if($dataType == 'string') {
			$data = "";
		}

		if($dataType == 'remove') {
			return $this->respond([
				"result" 	=> false,
				"error" 	=> true,
				"message" 	=> $message
			]);
		}

		return $this->respond([
			"status"	=> $status,
			"result" 	=> false,
			"error" 	=> true,
			"message" 	=> $message,
			"data" 		=> $data
		]);
	}

	/************To return success response******************************/

	/**
 * @response {
 *  data: [],
 *}
 */
	protected function apiRespond($data, $message)
	{
		return $this->setStatusCode(200)->respond([
	        'status'    =>  200,
	        'result'    => true,
	        'error'     => false,
	        'message'   => $message,
	        'data'      => $data
	    ]);
	}

/**
 * @response {
 *  data: [],
 *}
 */
	protected function respondInternalError($message = 'Server Error!', $dataType='object', $status=500)
	{
		return $this->setStatusCode(200)->respondWithError($message, $dataType,  $status);
	}

/*.......For custom error response starts here......*/
/**
 * @response {
 *  data: [],
 *}
 */
	public function getErrorResponse($data)
	{
	    $temp = array();

	    foreach($data as $objkey => $value){
	        foreach($value as $val){
	            $temp[$objkey] = $val ;
	        }
	    }

	    return $temp ;
	}
/*.......For custom error response ends here......*/

	/*..........for checking the validations starts here.......*/

	/**
 * @response {
 *  data: [],
 *}
 */
	public function checkErrorResponse($data, $message='Sorry data you are looking is not available!', $dataType='object', $errorType=400){
		if (empty($data)) {             

	        return $this->respondNotFound($message, $dataType, $errorType);
	    }

		if (!$data) {             

	    	return $this->respondNotFound($message, $dataType, $errorType);
	    }

	    if(!isset($data)){
	    	return $this->respondNotFound($message, $dataType, $errorType);
	    }
	}
/*..........for checking the validations ends here.......*/


    
}

?>
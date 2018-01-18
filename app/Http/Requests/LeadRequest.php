<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Helpers\MainHelper;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\User;
use App\Lead;

class LeadRequest extends FormRequest
{
    use MainHelper;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        $user = $this->getAuthUser($request);

         if($user)
         {

            return true;
         }
         return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {

        
        return [
            'status_id' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'telephone' => 'required|numeric',
            'status' => 'required',
            'source' => 'required|string|max:255',
            'due_date' => 'required|string|max:255',
            'budget' => 'required|numeric',
            'is_assigned' => 'required',
            'address' => 'required|string|max:255',
            'alternate_address' => 'required|string|max:255',
            'house_no' => 'required|string|max:255',
            'postcode' => 'required|numeric',
            'message' => 'required|string|max:255',
            'assigned_to' => 'required'
        ];
    }
}

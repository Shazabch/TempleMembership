<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "member_id" => "required_without:household_ids|numeric",
            "household_ids" => "required_without:member_id|array",
            "amount" => "required|numeric",
            "item_code_ids" => "required|array",
        ];
    }
}

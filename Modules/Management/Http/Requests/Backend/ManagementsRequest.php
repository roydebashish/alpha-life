<?php

namespace Modules\Management\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ManagementsRequest extends FormRequest
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
            'name'              => 'required|max:191',
            'slug'              => 'nullable|max:191',
            'designation'       => 'required',
            'category_id'       => 'required|numeric',
            'created_by_alias'  => 'nullable|max:191',
            'image'    => 'required|max:191',
            'status'            => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ["required", Rule::unique("projects", "name")->ignore($this->project), "min:2", "max:100"],
            "slug" => [Rule::unique("projects", "slug")->ignore($this->project), "max:100", "nullable"],
            "image" => [Rule::unique("projects", "image")->ignore($this->project), "image", "max:2048", "nullable"],
            "type_id" => ["exists:types,id", "nullable"],
            "technologies" => ["exists:technologies,id", "nullable"]
        ];
    }
}

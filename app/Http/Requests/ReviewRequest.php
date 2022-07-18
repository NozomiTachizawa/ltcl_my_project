<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function rules()
    {
        return [
            'review.title' => 'required|string|max:100',
            'review.price' => 'required|integer',
            'review.place' => 'required|string|max:50',
            'review.brand' => 'required|string|max:50',
            'review.body' => 'required|string|max:4000',
        ];
    }
}

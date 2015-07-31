<?php
/*
 * This file is part of the api package.
 *
 * (c) Eduostia Corporation <http://eduostia.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


/**
 * @author      : Aji G. P <aji.gumelar@eduostia.com>
 * @created     : 7/30/15
 */
class LoginRequest extends FormRequest{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'username' => 'required', 'password' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {

        return true;
    }
}
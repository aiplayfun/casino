<?php
namespace VanguardLTE\Http\Requests\Game {
    class UpdateDetailsRequest extends \VanguardLTE\Http\Requests\Request
    {
        public function rules()
        {
            $rules = [
                'name' => 'required',
                'title' => 'required',
                'percent' => 'required',
                'gameline' => 'required',
                'bet' => 'required',
                'winline' => 'required',

            ];
            return $rules;
        }
    }

}

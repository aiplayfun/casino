<?php
namespace VanguardLTE\Http\Requests\Game {
    class CreateGameRequest extends \VanguardLTE\Http\Requests\Request
    {
        public function rules()
        {
            $rules = [
                'name' => 'required',
                'title' => 'required',
                'percent' => 'required',
                'gameline' => 'required',
                'bet' => 'required',

            ];
            return $rules;
        }
    }

}

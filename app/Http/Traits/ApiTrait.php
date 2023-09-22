<?php
    namespace App\Http\Traits;
    use Illuminate\Http\Request;
    

    trait ApiTrait
    {
        public function api($data = null , $msg = null , $status = null)
        {
            $array = 
            [
                'data'=>$data,
                'message'=> $msg,
                'status'=> $status

            ];
            return response($array , $status);
        }
    }
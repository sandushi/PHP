<?php 

    class UserRequest{
        protected static $rules = [
            'name'=>'string',
            'email' => 'string'
        ];

        public static function validate($data){
            foreach(static :: $rules as $property => $type ){
                if(gettype($data[$property] != $type)){
                    throw new \Exception(message : "User Property {$property} must be of type {$type}");
                }
            }
        }
    }
?>
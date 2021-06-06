<?php 

    class User {
        public $name;
        public $email;

        public function __construct($data)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
        }
    }

?>
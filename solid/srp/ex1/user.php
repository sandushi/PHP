<?php

class User {

    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    //single responsibility for each class
    public function create(array $data){
        try{
            //save user to the database;
        }
        catch(Exception $e){
            $this->logger->writeToFile($e->getMessage());

        }
    }

}




?>
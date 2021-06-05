<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            class ATM{
                private $accnum;
                private $balance;

                public function setAccountNumber($accnum){
                    $this->accnum = $accnum;
                }

                public function setBalance($balance){
                    $this->balance = $balance;
                }

                public function getAccountNumber(){
                    return $this->accnum;
                }

                public function getBalance(){
                    return $this->balance;
                }
            }


            $account = new ATM();
            $account->setAccountNumber(123);
            $account->setBalance(12000);
            echo "The account {$account->getAccountNumber()} has {$account->getBalance()} ruppees balance."
       ?>
       


    </body>

</html>
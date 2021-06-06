<?php 

class calculate{

    protected $num1;
    protected $num2;
    protected $show;

    

    public function __construct($num1, $num2, Show $show)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->show = $show;
        
    }

    public function calculateResult($operator){
        switch ($operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                break;
            default : 
                $result = "Invalid";
        }

        $this->show->showResult($result,$operator);

    }
}



?>
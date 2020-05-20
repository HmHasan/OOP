<?php 

class java
{
    public $num1;
    public $num2;
    public $result;
    public function get_values($num1,$num2)
    {
        $this->num1=$num1;
        $this->num2=$num2;
        return $this;
        

    }

    public function calculate()
    {
       return $this->result = $this->num1 + $this->num2;
        
    }
    
    public function mul()
    {
       $this->result = $this->num1 * $this->num2;
       return $this->result;
        
    }
}

?>
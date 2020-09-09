 <?php 
 
$result = "";


class calculator
{
    var $number1;
    var  $number2;
    
// switch case based on operator passed to perform operations
    function checkopration($operator)
    {
        switch($operator)
        {
            case 'Add':
                return $this->number1 + $this->number2;
                break;

            case 'Substract':
                return $this->number1 - $this->number2;
                break;

            case 'Multiply':
                return $this->number1 * $this->number2;
                break;

            case 'Divide':
                return $this->number1 / $this->number2;
                break;

            default:
            return "Sorry No command found";
        }   
    }

    // this function returns the result by checking operator 
    function getresult($number1, $number2, $operator)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        return $this->checkopration($operator);
    }
}

// making instance of class
$cal = new calculator();

// When submit/calculate button is clicked the series of operation starts
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['number1'],$_POST['number2'],$_POST['operator']);
      
}



?>
 
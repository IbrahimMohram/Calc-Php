<?php
if (isset($_GET['calc'])) {
    $firstNumber = $_GET['firstnumber'];
    $secondNumber = $_GET['secondnumber'];
    $operation = $_GET['op'];

//     if ($operation == 'add') 
//     {
//       echo add($firstNumber, $secondNumber);

//     } 
//     elseif ($operation == 'sub') 
//     {
//         echo sub($firstNumber, $secondNumber);
//     } 
//     elseif ($operation == 'mul') 
//     {
//         echo mul($firstNumber, $secondNumber);
//     } 
//     elseif ($operation == 'div') 
//     {
//         echo div($firstNumber, $secondNumber);
//     }
// } 
// else 
// {
//      header("location: Calc.php");
       
// }
switch($operation){
    case 'add' : 
      echo add($firstNumber, $secondNumber);
        break;
    case 'sub' :
    echo sub($firstNumber, $secondNumber);

        break;
    case 'mul' : 
    echo mul($firstNumber, $secondNumber);

        break;
    case 'div' :
    echo div($firstNumber, $secondNumber);

        break;
};
}



function add(int|float $num1, int|float $num2): int|float
{
    return $num1 + $num2;
}

function sub(int|float $num1, int|float $num2): int|float
{
    return $num1 - $num2;
}

function div(int|float $num1, int|float $num2): int|float
{
     return $num1 / $num2;
 }
    function mul(int|float $num1, int|float $num2): int|float
    {
        return $num1 * $num2;
    };


?>
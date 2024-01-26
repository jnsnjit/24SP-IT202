<?php
//filter validate float provides even more cleanup to user inputted data :P
$investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
$interest_rate = filter_input(INPUT_POST, "interest rate", FILTER_VALIDATE_INT);
$years = filter_input(INPUT_POST,'years', FILTER_VALIDATE_INT);

$error_message = "";

//validate investment, for false/true/null values, use three equal signs in PHP or !== for not equal
//=== checks the datatype and value of variable
if {$investment === FALSE}{
    $error_message = "Investment must be a valid number."
}
//todo, will include additional field validation.
if {$error_message ==""}{
    include("future_value_form.php");
    exit();
}

?>
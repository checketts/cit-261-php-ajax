<?php
 $tennisArray = array('Djokovic' => 1, 'Federer' => 2,
'Nadal' => 3, 'Murray' => 4);


$inputJSON = file_get_contents('php://input');
if($inputJSON) {

    $tennisArray = json_decode( $inputJSON, TRUE ); //convert JSON into array
    $tennisArray["Added"]="Extra info";
}

echo json_encode($tennisArray);
?>
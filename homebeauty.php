<?php

// We don't need action for this tutorial, but in a complex code you need a way to determine Ajax action nature
//$action = $_POST['action']; 
// Decode JSON object into readable PHP object
//$formData = json_decode($_POST['formData']); 

// Get username
//$username = $formData->{'username'}; 
// Get password
//$password = $formData->{'password'}; 

header('Cache-Control: no-cache, must-revalidate');

echo '{ "resultado": "1", "servicos": "Escova|Cauterização" }';	

//$output = array('status' => true, 'massage' => 'Welcome!');
//echo json_encode($output);



?>
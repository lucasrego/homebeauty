<?php

//$action = $_POST['action']; 
// Decode JSON object into readable PHP object
//$formData = json_decode($_POST['formData']); 

// Get username
//$username = $formData->{'username'}; 
// Get password
//$password = $formData->{'password'}; 

header('Cache-Control: no-cache, must-revalidate');

echo '{ "resultado": "1", "servicos": "Escova#50|Cauterização#120|Manicure#20|Manicure Esmalte Importado#25|Maquiagem MAC#145|Pedicure#20|Pedicure Esmalte Importado#25|Sombrancelha#18" }';

//$output = array('status' => true, 'massage' => 'Welcome!');
//echo json_encode($output);



?>
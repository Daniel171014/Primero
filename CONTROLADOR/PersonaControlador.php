<?php

require_once '../DAO/PersonaDAO.php';
require_once '../BEAN/PersonaBEAN.php';

$objeto=new PersonaDAO();
$LISTA=$objeto->ListarPersonas();
header('Content-type:aplication/json');
echo json_encode($LISTA);


?>

<?php
include 'GestionAutomovilesAuth.php';

try{

    $soap = new SoapServer(null, array('uri' => 'http://localhost/SOAP_Automoviles/service-automoviles.php'));
    $soap->setClass('GestionAutomovilesAuth');

    $soap->handle();

} catch (SoapFault $f){
    echo 'SoapFault exception: ',  $f->getMessage(), "\n";
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
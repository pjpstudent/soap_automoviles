<?php
class client {
    public function __construct() {
        $params = array('location' => 'http://localhost/SOAP_Automoviles/service-automoviles.php',
            'uri' => 'urn://localhost/SOAP_Automoviles/',
            'trace' => 1);
        $this->instance = new SoapClient(null, $params);

        // set the header 
        
        $auth_params = new stdClass();
        $auth_params->username = 'username';
        $auth_params->password = 'password';

        //$this->instance->__setCookie('__test', '682672cd7c8af63d38dae461d88fd641');

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        $header = new SoapHeader('http://localhost/SOAP_Automoviles/', 'authenticate', $header_params, false);
        $this->instance->__setSoapHeaders(array($header));

    }

    public function __call($name, $arguments){
        return $this->instance->{$name}($arguments);
    } 
}

$client = new client();


?>
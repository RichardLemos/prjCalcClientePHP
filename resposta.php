<?php
	$num1  = $_POST['num1'];
	$num2  = $_POST['num2'];
	$opcao  = $_POST['opcao'];
	
	$client = new SoapClient('http://localhost:10000/calculadora?wsdl');
	$function = $opcao;
	$arguments= array($function=> array(
                        'num1'   => $num1,
                        'num2'   => $num2,
                ));
	$options =  array('location' => 'http://localhost:10000/calculadora?wsdl');
	$result = $client->__soapCall($function, $arguments, $options);
	echo 'Resposta: ';
	$valor = get_object_vars($result);
	print($valor['return']);
?>
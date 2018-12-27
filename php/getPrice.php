<?php

if( empty($_POST['id_product'])  		||
   	empty($_POST['quantity']) 		||
   	empty($_POST['name']) 	||
   	empty($_POST['email']) 	||
   	empty($_POST['number'])
  	empty($_POST['city'])) {

	echo 'No has ingresado todos los campos requeridos';
	return false;

}

//define variables
$strProduct = $_POST['id_product'];
$strQuantity = $_POST['quantity'];
$strName = $_POST['name'];
$strMail = $_POST['email'];
$strNumber = $_POST['number'];
$strCompany = $_POST['company'];
$strCity = $_POST['city'];
$strFrom = "noreply@sunshinesolarsa.com";


//mail structure
$strTo = 'cgonzalez2064@gmail.com';
//$strTo = 'info@bitcoude.com';

$strSubject = "Formulario de cotización, Sunshine Solar:  $strName";



$strBody = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
$strBody .= "<table style='width: 100%;'>";
$strBody .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$strBody .= "</td></tr></thead><tbody><tr>";
$strBody .= "<td style='border:none;'><strong>Nombre:</strong> ". $strName." </td>";
$strBody .= "<td style='border:none;'><strong>Email:</strong> ". $strMail ."</td>";
$strBody .= "<td style='border:none;'><strong>Empresa:</strong> ". $strCompany ."</td>";
$strBody .= "</tr>";
$strBody .= "<tr><td style='border:none;'><strong>Producto:</strong> ". $strProduct ."</td>";
$strBody .= "<td style='border:none;'><strong>Cantidad:</strong> ". $strQuantity ."</td></tr>";
$strBody .= "<tr><td style='border:none;'><strong>Número:</strong> ". $strNumber ."</td></tr>";
$strBody .= "<tr><td></td></tr>";
$strBody .= "<tr><td colspan='2' style='border:none;'>Y el cliente es originario de: ". $strCity ."</td></tr>";
$strBody .= "</tbody></table>";
$strBody .= "</body></html>";


/*$strBody = "Has recibido un mensaje del formulario de contacto de tu Pagina Web.\r\n\n"."Estos son los detalles:\r\n\n Nombre: $strName
	\r\n Email: $strMail
	\r\n Empresa: $strCompany
	\r\n Email: $strNumber
	\r\n Mensaje:\r\n $strMessage";*/


$headers = "From: noreply@sunshinesolarsa.com \r\n";
$headers .= "Reply-To: $strMail \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

//send mail
if ( mail($strTo, $strSubject, $strBody, $headers) ) {
	return true;
  echo "Mensaje enviado con exito";
  ?>
    <script>
      console.log("Mensaje enviado exitosamente!");
    </script>
  <?php
}
else{
  return false;
  print "No se envío el correo";
  ?>
    <script>
      console.log("Error! en mensaje no fue enviado");
    </script>
  <?php
}


?>

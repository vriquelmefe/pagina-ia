<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(405);
    echo json_encode(
        array(
        'code'      => 405,
        'message'    => 'Método no permitido'
      )
        );
    }

$bodyJSON = file_get_contents('php://input');
$body = json_decode($bodyJSON);

if (JSON_ERROR_NONE !== json_last_error()) {
    http_response_code(405);
    echo json_encode(
        array(
        'code'      => 405,
        'message'    => 'No se ha podido procesar el cuerpo del mensaje'
      )
        );
}

$name = $body->name;
$emailForm = $body->emailForm;
$empresa = $body->empresa;
$phoneNumber = $body->phoneNumber;
$mensaje = $body->mensaje;

$to = "info@neuraldata.cl";
$subject = "Enviado desde la página web";
$message = '<html><body>';
$message .= "Nombre: <b>$name</b><br>";
$message .= "Email:$emailForm<br>";
$message .= "Empresa: $empresa<br>";
$message .= "Telefono: $phoneNumber<br>";
$message .= "Mensaje:<br><br>$mensaje";
$message .= '</body></html>';

$headers = "From: website@neuraldata.cl\r\n";
$headers .= "Reply-To: ". $emailForm . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$success = mail($to, $subject, $message, $headers);

if (!$success) {
    http_response_code(500);
    echo json_encode(array(
        'code'      => 500,
        'message'    => 'Ha ocurrido un error en el servidor'
      ));
}
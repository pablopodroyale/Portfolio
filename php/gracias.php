<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:400,500,700" rel="stylesheet">                   
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="       sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
  	<script src="https://use.fontawesome.com/6f6c15a022.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="../css/style.css">
	<title>Gracias</title>
</head>
<body class="gracias">
    <?php
    if(isset($_POST['email'])) {

    // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = "pablopodgaiz@gmail.com";
    $email_subject = "Contacto desde el sitio web";

    // Aquí se deberían validar los datos ingresados por el usuario
    if(!isset($_POST['first_name']) ||
    !isset($_POST['last_name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['telephone']) ||
    !isset($_POST['comments'])) {

    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
    }

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['first_name'] . "\n";
    $email_message .= "Apellido: " . $_POST['last_name'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
    $email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


    // Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    echo "¡El formulario se ha enviado con éxito!";
    }
    ?>
    <h2>Gracias por su consulta</h2>
    <a class="btn btn-info" href="http://www.pablopodgaiz.tk" role="button">Volver</a>  
</body>
</html>
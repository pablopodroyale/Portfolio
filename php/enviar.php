<?php

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $mail = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  

  $cuerpo = 'Remitente: ' . $nombre . ' ' . 
  $apellido . '<br>';
  $cuerpo .= 'Email: ' . $mail . '<br>';
  $cuerpo .= 'Mensaje: ' . $mensaje . '<br>';

  $destino = 'pablopodgaiz@gmail.com';
  $asunto = $asuntoUsuario;

  $encabezados = 'MIME-Version: 1.0' . "\r\n";
  $encabezados .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
  $encabezados .= 'From: ' . $nombre . ' ' . $apellido . '<' . $mail . '>' . "\r\n"; 

  mail( $destino, $asunto, $cuerpo, $encabezados );
  header("Location: gracias.html"); 

?>
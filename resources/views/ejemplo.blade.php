<?php 

$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'imagenes/'; 

$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.php'; 

$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'success.php'; 

$fieldname = 'file'; 

$errors = array(1 => 'php.ini tamaño de archivo excedido', 
                2 => 'tamaño excedido en la imagen', 
                3 => 'solo se subio la imagen parcialmente', 
                4 => 'ningun archivo fue subido'); 

isset($_POST['submit']) 
    or error('el formulario es necesario', $uploadForm); 

($_FILES[$fieldname]['error'] == 0) 
    or error($errors[$_FILES[$fieldname]['error']], $uploadForm); 
     
@is_uploaded_file($_FILES[$fieldname]['tmp_name']) 
    or error('no es una subida http', $uploadForm); 
     
@getimagesize($_FILES[$fieldname]['tmp_name']) 
    or error('solo esta permitido subir imagenes', $uploadForm); 
     
$now = time(); 
while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$_FILES[$fieldname]['name'])) 
{ 
    $now++; 
} 

@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename) 
    or error('sin permisos en el directorio', $uploadForm); 
     
header('Location: ' . $uploadSuccess); 

function error($error, $location, $seconds = 5) 
{ 
    header("Refresh: $seconds; URL=upload.php"); 
    echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"'.
    '"http://www.w3.org/TR/html4/strict.dtd">'.
    '<html lang="es">'.
    '    <head>'.
    '        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">'.
    '        <link rel="stylesheet" type="text/css" href="stylesheet.css">' .
    '    <title>Error al subir</title>'.
    '    </head>'.
    '    <body>'.
    '    <div id="Upload">'.
    '        <h1>Codigo de error.</h1>'.
    '        <p>Un error a ocurrido: '.
    '        <span class="red">' . $error . '...</span>'.
    '         el formulario esta recargandose.</p>' .
    '     </div>'.
    '</html>'; 
    exit; 
}

?> 
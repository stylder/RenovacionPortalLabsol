<?php 

$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'ejemplo'; 

$max_file_size = 30000; 

?>

<html lang="es"> 
    <head> 
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> 
     
        <link rel="stylesheet" type="text/css" href="domxml_xslt_stylesheet_doc(xsl_doc).css"> 
         
        <title>Formulario de subida</title> 
     
    </head> 
     
    <body> 
     
    <form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post"> 
     
        <h1> 
            Formulario de Subida
        </h1> 
         
        <p> 
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>"> 
        </p> 
         
        <p> 
            <label for="file">Seleccionar Imagen: </label> 
            <input id="file" type="file" name="file"> 
        </p> 
                 
        <p> 
            <input id="submit" type="submit" name="submit" value="Subir Imagen"> 
        </p> 
     
    </form> 
     
     
    </body> 

</html>
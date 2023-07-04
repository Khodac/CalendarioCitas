<?php
header("Content-Type: application/json");

$pdo= new PDO("mysql:host=mysql;dbname=calendarioTres","indice","1234");


$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){

    case 'leer':
        
        $sentenciaSQL= $pdo->prepare("SELECT * FROM tbleventos");
        $sentenciaSQL->execute();
        $resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($resultado));

    break;
    case 'agregar':
        
        $sentenciaSQL= $pdo->prepare("INSERT INTO `tbleventos` (`id`, `title`,`duracion`, `descripcion`, `color`, `start`, `end`,`empresa`,`telefono`) VALUES (NULL,:title,:duracion,:descripcion,:color, :start,:end,:empresa,:telefono);");
        $sentenciaSQL->execute( array(
            "title"=>$_POST['title'],
            "duracion"=>$_POST['duracion'],  
            "descripcion"=>$_POST['descripcion'],
            "color"=>$_POST['color'],
            "start"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "end"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "empresa"=>$_POST['empresa'],
            "telefono"=>$_POST['telefono']
        ) );
        print_r($_POST);
    break;
    case "borrar":
        $sentenciaSQL= $pdo->prepare("DELETE FROM `tbleventos` WHERE `id`=:id");
        $sentenciaSQL->execute( array(
            "id"=>$_POST['id']
        ) );
        print_r($_POST);
    break;
    case "actualizar":
        $sentenciaSQL= $pdo->prepare("UPDATE `tbleventos` SET `title`=:title, `duracion`=:duracion, `descripcion`=:descripcion,`color`=:color,`start`=:start,`end`=:end,`empresa`=:empresa,`telefono`=:telefono WHERE `id`=:id");
       
        $sentenciaSQL->execute( array(
            "title"=>$_POST['title'],
            "duracion"=>$_POST['duracion'], 
            "descripcion"=>$_POST['descripcion'],
            "color"=>$_POST['color'],
            "start"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "end"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "id"=>$_POST['id'],
            "empresa"=>$_POST['empresa'],
            "telefono"=>$_POST['telefono']
        ) );
        
        print_r($_POST);
    break;


}

?> 
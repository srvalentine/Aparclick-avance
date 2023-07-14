<?php
session_start();
if (!isset($rootDir)){
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
}
require_once($rootDir . "/DAO/Espacio_EstacionamientoDAO.php");

if(isset($_POST['opcion'])){
    $opc = htmlspecialchars($_POST['opcion']);
    if($opc == "agregar"){
    }
    elseif($opc == "buscar"){
        if(isset($_POST['id'])){
            $ID = htmlspecialchars($_POST['id']);
            $encontrado = Espacio_EstacionamientoDAO::buscar($ID); 
            print_r($encontrado);
        }else{
            echo "error";
        }
    }
    elseif($opc == "arrendar"){
        if(isset($_POST['id'])){
            $ID = htmlspecialchars($_POST['id']);
            $estadoAnterior = Espacio_EstacionamientoDAO::getEstado($estado);
            
            Espacio_EstacionamientoDAO::cambiarEstado($estado, 'espera');
            
            $_SESSION['arrendado_por'] = $ID;
            

        }else{
            echo "error";
        }
    }
    elseif($opc == "cancelar_Arriendo"){
        if(isset($_SESSION['arrendado_por'])){
            $ID = $_SESSION['arrendado_por'];
            $estadoAnterior = Espacio_EstacionamientoDAO::getEstado($ID);
            
            Espacio_EstacionamientoDAO::cambiarEstado($ID, $estadoAnterior);
            
            unset($_SESSION['arrendado_por']);
            
        }else{
            echo "error";
        }
    }
}else{
    echo "error";
}

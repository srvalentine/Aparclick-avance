<?php
if (!isset($rootDir)){
	$rootDir = $_SERVER['DOCUMENT_ROOT'];
}
require_once ($rootDir ."conexion.php");
require_once ($rootDir ."model_Estacionamiento.php");

class Espacio_EstacionamientoDAO {
	public static function buscar($id) {
		$cc = DB::getInstancia();
		$stSql = "SELECT * FROM Espacio_Estacionamiento WHERE id=:id";
		$rs = $cc->db->prepare($stSql);
		$rs->execute(array('id' => $id));
		$ba = $rs->fetch();
		$nuevo = new Espacio_Estacionamiento($ba['id'], $ba['numero'], $ba['estado']);
		return $nuevo; 
	}

	public static function actualizar($nuevo) {
		$cc = DB::getInstancia();
		$stSql = "UPDATE Espacio_Estacionamiento SET numero=:numero, estado=:estado WHERE id=:id";
		$rs = $cc->db->prepare($stSql);
		$params = self::getParams($nuevo);
		return $rs->execute($params);
	}
	public static function contador() {
		$cc=DB::getInstancia();
		$stSql = "SELECT * FROM Espacio_Estacionamiento";
		$rs = $cc->db->prepare($stSql);
		$rs->execute();
		$cont = count($rs->fetchAll());
		return $cont; 
	}

	private static function getParams($nuevo){
		$params = array();
		$params['id'] = $nuevo->getId();
		$params['numero'] = $nuevo->getNumero();
		$params['estado'] = $nuevo->getEstado();
		return $params;
	}
}
?>

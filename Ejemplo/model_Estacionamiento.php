<?php 
class Espacio_Estacionamiento {
	private $id; 
	private $numero;  
	private $estado;   

	function __construct($id,$numero,$estado){
		$this->id=$id;
		$this->numero=$numero;
		$this->estado=$estado;
	}

	function getId(){
		return $this->id;
	}

	function getNumero(){
		return $this->numero;
	}

	function getEstado(){
		return $this->estado;
	}

	function setId($id){
		$this->id=$id;
	}

	function setNumero($numero){
		$this->numero=$numero;
	}

	function setEstado($estado){
		$this->estado=$estado;
	}

	function __toString(){
		return print_r($this,true);
	}
}
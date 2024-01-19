<?php
include_once('Dispositivo.php');
class Movil extends Dispositivo
{
	private $pulgadas;
	private $tipo_pantalla;
	private $conectividad;

	public function __construct($marca, $modelo, $año, $pulgadas, $tipo_pantalla, $conectividad)
	{
		parent::__construct($marca, $modelo, $año);
		$this->pulgadas = $pulgadas;
	}

	public function getPulgadas()
	{
		return $this->pulgadas;
	}

	public function setPulgadas($pulgadas)
	{
		$this->pulgadas = $pulgadas;
	}

	public function getTpo_pantalla()
	{
		return $this->tipo_pantalla;
	}

	public function setTpo_pantalla($tipo_pantalla)
	{
		$this->tipo_pantalla = $tipo_pantalla;

	}

	public function getConectividad()
	{
		return $this->conectividad;
	}

	public function setConectividad($conectividad)
	{
		$this->conectividad = $conectividad;
	}
}

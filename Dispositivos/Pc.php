<?php
include_once('Dispositivo.php');
class Pc extends Dispositivo
{
    private $cpu;
    private $tarjeta_grafica;
    private $placa_base;


    public function getCpu()
    {
        return $this->cpu;
    }


    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getTarjeta_grafica()
    {
        return $this->tarjeta_grafica;
    }


    public function setTarjeta_grafica($tarjeta_grafica)
    {
        $this->tarjeta_grafica = $tarjeta_grafica;

        return $this;
    }

    public function getPlaca_base()
    {
        return $this->placa_base;
    }

    public function setPlaca_base($placa_base)
    {
        $this->placa_base = $placa_base;

        return $this;
    }
}

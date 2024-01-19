<?php
class Dispositivo
{

    protected $marca;
    protected $modelo;
    protected $anno;

    public function __construct($mar, $mod, $an)
    {
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->anno = $an;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

    }

    public function getAnno()
    {
        return $this->anno;
    }

    public function setAnno($anno)
    {
        $this->anno = $anno;

    }
}

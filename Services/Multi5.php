<?php
namespace Gabe96\Multi5Bundle\Services;

class Multi5
{
    private $Multi5;
    private $Inserito;

    public function setNumero($Inserito)
    {
        $this->Inserito = $Inserito;
    }

    public function doMulti5()
    {
        $this->Multi5 = ($this->Inserito * 5);
        return $this->Multi5;
    }

    public function getInserito()
    {
        return $this->Inserito;
    }
}

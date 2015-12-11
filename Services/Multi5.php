<?php
namespace Gabe96\Multi5Bundle\Services;

class Multi5
{
    private $Multi5;

    public function setMulti5($Multi5)
    {
        $this->Multi5 = $Multi5;
    }

    public function doMulti5()
    {
        $this->Multi5 = ($this->Multi5 * 5);
        return $this->Multi5;
    }
}

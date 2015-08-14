<?php

namespace Vendor;


class ColorDrawDecorator implements DrawDecorator
{
    protected $color;
    public  function __construct($color)
    {
        $this->color = $color;
    }

    public function beforeDraw()
    {
        echo "<div style='color: {$this->color};'>";
    }

    public function afterDraw()
    {
        echo '<div>';
    }
}
<?php

namespace Vendor;


class SizeDrawDecorator implements  DrawDecorator
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function beforeDraw()
    {
        echo "<div style='font-size: {$this->size};'>";
    }

    public function afterDraw()
    {
        echo '<div>';
    }
}
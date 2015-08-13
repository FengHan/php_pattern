<?php

namespace Vendor;


class Page
{
    protected $strategy;
    public function index()
    {
        echo "AD:";
        $this->strategy->showAdd();
        echo "<br>"
        echo "Content:";
        $this->strategy->showCategory();
    }

    public function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}
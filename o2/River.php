<?php

class River extends Eat
{
    protected $river;
    private $gold = 300;

    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam RIVERI';
    }

    public function setRiver($river)
    {
        $this->river = $river;
    }
}

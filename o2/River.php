<?php

abstract class River extends Eat
{
    protected $river;
    private $gold = 300;

    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam RIVERI';
        $this->saySomething('Mūūū');
    }

    public function setRiver($river)
    {
        $this->river = $river;
    }

    abstract public function saySomething(string $words);
}

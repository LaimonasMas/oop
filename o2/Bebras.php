<?php

class Bebras extends River
{

    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam Bebra';
        $this->letsEat();
    }

    public function saySomething(string $words)
    {
        foreach(range(1,42) as $_) {
            echo $words;
        }
        
    }

    public function saySomething222(string $words)
    {
        foreach(range(1,42) as $_) {
            echo $words;
        }
        
    }
}

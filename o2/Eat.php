<?php

abstract class Eat 
{
    public static $color = 'Blue';
    public function letsEat()
    {
        echo '<br>Niam Niam<br>';
    }

    abstract public function saySomething222(string $words);

}
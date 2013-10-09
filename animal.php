<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-08
 * Time: 16:29
 * To change this template use File | Settings | File Templates.
 */

abstract class Animal {

    public $couleurfourrure;
    public $race;
    public $energie = 100;

    function gratter()
    {
        echo "Il se gratte<br/>";
    }
    function lèche()
    {
        echo "Il se lèches<br/>";
    }
    function manger()
    {
        echo "Il mange<br/>";
    }
    function dormir()
    {
        echo "Il dort<br/>";
        $this->energie = 100;
    }


}

class Chat extends Animal {


    function __construct($couleur,$race)
    {
        $this->couleurfourrure = $couleur;
        $this->race = $race;
    }

    function miaouler()
    {
        echo "Il miaule<br/>";
        $this->energie = $this->energie -40;
        if($this->energie <= 0)
        {
            $this->dormir();
        }
    }

    function ronronner()
    {
        echo "Il ronronne<br/>";
    }



}

class Chien extends Animal {

    function __construct($couleur,$race)
    {
        $this->couleurfourrure = $couleur;
        $this->race = $race;
    }

    function Japper()
    {
        echo "Il jappe<br/>";
        $this->energie = $this->energie -40;
        if($this->energie <= 0)
        {
            $this->dormir();
        }
    }

    function creuser()
    {
        echo "Il creuse<br/>";
    }


}

$chat1 = new Chat("roux","Bengal");
$chat2 = new Chat("noir","Ceylan");
$chien1 = new Chien("noir","golden");
$chien2 = new Chien("brun","bouvier-bernois");
$chien3 = new Chien("blond","husky");

$chat1->miaouler();
$chat1->miaouler();
$chat1->miaouler();
$chien1->Japper();
$chien1->Japper();
$chien1->Japper();
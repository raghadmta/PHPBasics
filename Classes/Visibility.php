<?php
class Beverage
{
    // private $temperature, $color; -> can be seen ONLY in the class
    protected $temperature, $color; //-> can be seen in all child classes can't see them externally

    protected $opacity;
    function __construct($temperature, $color)
    {
        $this->temperature = $temperature;
        $this->color = $color;
    }
    function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}
class Milk extends Beverage
{
    function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
}
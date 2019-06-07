<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    // speed of fan default is slow =1
    private $speed = self::SLOW;
    // status of fan default is off
    private $status = false;
    // radius of fan
    private $radius = 5;
    // color of fan
    private $color = "blue";

    function getStatus()
    {
        return $this->status;
    }

    function setStatus($boolean)
    {
        $this->status = $boolean;
    }

    function getSpeed()
    {
        return $this->speed;
    }

    function setSpeed($num)
    {
        switch ($num) {
            case 1:
                $this->speed = $num;
                break;
            case 2:
                $this->speed = $num;
                break;
            case 3:
                $this->speed = $num;
                break;
            default:
                echo "Fan only have 3 speed! from Low to High";
                echo "<br>" . "<br>";
                break;
        }
    }

    function getRadius()
    {
        return $this->radius;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function getColor()
    {
        return $this->color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function toString()
    {
        if ($this->getStatus()) {
            echo "Fan is ON!" . "<br>" . "<br>";
            echo "Speed of Fan is: " . $this->getSpeed() . "<br>" . "<br>";
            echo "Radius of Fan is: " . $this->getRadius() . "<br>" . "<br>";
            echo "Color of Fan is: " . $this->getColor() . "<br>" . "<br>";
        } else {
            echo "Fan is OFF!" . "<br>" . "<br>";
            echo "Radius of Fan is: " . $this->getRadius() . "<br>" . "<br>";
            echo "Color of Fan is: " . $this->getColor() . "<br>" . "<br>";
        }
    }
}
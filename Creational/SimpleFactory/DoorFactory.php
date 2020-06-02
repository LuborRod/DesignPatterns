<?php


class DoorFactory
{
    public static function makeDoor($width, $height): Door1
    {
        return new WoodenDoor($width, $height);
    }
}
<?php

class WithoutDiTest extends PHPUnit_Framework_TestCase
{
    public function testController()
    {
        $controller = new Controller;
        $controller->anAction();
    }
}

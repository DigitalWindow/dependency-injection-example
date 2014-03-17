<?php

use Awin\DependencyInjection\DependencyInjector;

class WithoutDiTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $model = $this->getMock('Model');

        $model
            ->expects($this->any())
            ->method('getSomeData')
            ->will($this->returnCallback(function () {echo 'You used dependency injection! You\'re awesome!!!';}));

        $this->getDependencyInjector()->set('Model', $model);
    }

    public function getDependencyInjector()
    {
        return DependencyInjector::getSingleInstance();
    }

    public function testController()
    {
        $controller = new Controller;
        $controller->anAction();
    }
}

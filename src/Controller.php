<?php

use Awin\DependencyInjection\DependencyInjector;

class Controller
{
    public function anAction()
    {
        $model = $this->getDependencyInjector()->get('Model');
        $model->getSomeData();
    }

    public function getDependencyInjector()
    {
        return DependencyInjector::getSingleInstance();
    }
}
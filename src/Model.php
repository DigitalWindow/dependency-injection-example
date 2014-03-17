<?php

class Model
{
    public function getSomeData()
    {
        throw new Exception('You accessed the DB in a unit test!!  You suck!!!!!');
    }
}
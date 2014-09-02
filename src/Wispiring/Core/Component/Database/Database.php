<?php

abstract class Database
{
    abstract function conn();

    abstract function query();
}
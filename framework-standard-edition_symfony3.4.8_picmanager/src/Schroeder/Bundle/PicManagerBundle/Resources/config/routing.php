<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('schroeder_pic_manager_homepage', new Route('/', array(
    '_controller' => 'SchroederPicManagerBundle:Default:index',
)));

return $collection;

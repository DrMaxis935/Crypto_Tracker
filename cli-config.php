<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use DoctrineConnector\EntityManagerFactory;
include 'vendor/autoload.php';

$container = require 'config/container.php';

$factory = new EntityManagerFactory();
$entityManager = $factory($container);
return ConsoleRunner::createHelperSet($entityManager);
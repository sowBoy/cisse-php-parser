<?php

use Cisse\DataExtractor\CisseDataExtractor;

require_once(__DIR__ .'/../DataExtractor/CisseDataExtractor.php');
require_once(__DIR__.'/../DataChecker/CisseDataChecker.php');
require_once(__DIR__.'/../Common/EntityDescriptor.php');
$filename = __DIR__ . "/data-example.cisse";
$extrator = new CisseDataExtractor($filename);
var_dump($extrator->getEntitiesThatHaveChildren());
die;

<?php

use Cisse\DataExtractor\CisseDataExtractor;

require_once(__DIR__ .'/../DataExtractor/CisseDataExtractor.php');
$filename = __DIR__ . "/data-example.cisse";
$extrator = new CisseDataExtractor($filename);
$extrator->returnDataWihoutComments();

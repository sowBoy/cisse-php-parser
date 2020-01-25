<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\DataExtractor;


/**
 * Provide CISSE data without comments.
 *
 * @author sowboy
 */
class CisseDataExtractor
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function returnDataWihoutComments()
    {
        $rawData = file_get_contents($this->filename);
        if(!empty($rawData)){
            $dataInarray = explode("\n", $rawData);
            foreach($dataInarray as $key => $line){
                preg_match('/^---(.*)$/m', $line, $comments);
                if($comments){
                    unset($dataInarray[$key]);
                }
            }
            $cleanedData = implode('', $dataInarray);
            return $cleanedData;
        }
    }

}


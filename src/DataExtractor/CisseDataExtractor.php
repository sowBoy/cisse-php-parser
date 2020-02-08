<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\DataExtractor;

use Cisse\DataChecker\CisseDataChecker;
use Cisse\Common\EntityDescriptor;

/**
 * Provide CISSE data without comments.
 *
 * @author sowboy
 */
class CisseDataExtractor
{
    private $filename;

    private $cleanedData;

    private $rawData;

    private $dataChecker;

    /**
     * @param mixed $filename
     * 
     * @return void
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->rawData = file_get_contents($this->filename);
        $this->cleanedData = $this->returnDataWihoutComments();
        $this->dataChecker = new CisseDataChecker();
    }

    /**
     * @return array
     */
    public function returnDataWihoutComments()
    {
        if(!empty($this->rawData)){
            $dataInarray = explode("\n", $this->rawData);
            foreach($dataInarray as $key => $line){
                preg_match('/^---(.*)$/m', $line, $comments);
                if($comments || empty($line)){
                    unset($dataInarray[$key]);
                }
            }
            return $dataInarray;
        }
    }

    public function getEntitiesThatHaveChildren()
    {
        $this->dataChecker->notCisseDataExceptionThrower($this->cleanedData);
        if(null !== $this->cleanedData){
            foreach($this->cleanedData as $key => $element){
                
            }
        }
    }

}


<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\DataChecker;

use Cisse\Common\EntityDescriptor;
use Cisse\Exception\NotCisseDataException;

/**
 * Check the CISSE DATA
 *
 * @author sowboy
 */
class CisseDataChecker
{
    const ENTITY_END = 'entityEnd';
    const MIDDLE_OF_ENTITY_OR_ARRAY = 'middleOfEntityOrArray';
    const CISSE_ARRAY_END = 'cisseArrayEnd';


    /**
     * @param mixed $data
     * 
     * @return void
     */
    public function isCisseBeginCharacter($data)
    {
        $result = FALSE;
        if (!empty($data)) {
            $firstElement = array_slice($data, 0, 1)[0]; 
            $result = $this->dealWithFirstElement($firstElement);
        }
        return $result;
    }

    /**
     * @param mixed $data
     * 
     * @return void
     */
    public function isCisseEndCharacter($data)
    {
        $result = false;
        if (!empty($data)) {
            $lastElement = end($data);
            $result = $this->dealWithLastElement($lastElement);
        }
        return $result;
    }

    /**
     * @param mixed $data
     * 
     * @return void
     */
    public function notCisseDataExceptionThrower($data)
    {
        $isCisseBeginCharacter = $this->isCisseBeginCharacter($data);
        $isCisseEndCharacter = $this->isCisseEndCharacter($data);
         if(false === $isCisseBeginCharacter){
            throw new NotCisseDataException('The start character of the data is not identified as a character marking the start of a CISSE data.', 1);
         }
         if(false === $isCisseEndCharacter){
            throw new NotCisseDataException('The end character of the data is not identified as a character marking the start of a CISSE data.', 1);
         }
         if(false === $isCisseBeginCharacter && false === $isCisseEndCharacter){
            throw new NotCisseDataException('Neither the beginning character nor the end character allows identifying a valid CISSE data.', 1);
         }
    }

    /**
     * @param mixed $dataPortion
     * 
     * @return void
     */
    public function determineDataPortionNature($dataPortion)
    { 
        $result = [];
         if(false === $this->dealWithFirstElement($dataPortion)
         && $dataPortion[strlen($dataPortion) - 1] === EntityDescriptor::CISSE_ENTITY_END
         ){
             $result[self::ENTITY_END] = true;
         }elseif(false === $this->dealWithFirstElement($dataPortion)
         && $dataPortion[strlen($dataPortion) - 1] === EntityDescriptor::CISSE_ARRAY_END 
         ){
             $result[self::CISSE_ARRAY_END] = true;
         }elseif(false === $this->dealWithFirstElement($dataPortion)
         && $dataPortion[strlen($dataPortion) - 1] !== EntityDescriptor::CISSE_ARRAY_END 
         && $dataPortion[strlen($dataPortion) - 1] === EntityDescriptor::CISSE_ENTITY_END
         ){
             $result[self::MIDDLE_OF_ENTITY_OR_ARRAY] = true;
         }
    }

    /**
     * @param mixed $firstElement
     * 
     * @return void
     */
    private function dealWithFirstElement($firstElement)
    {
        if (
            $firstElement[0] !== EntityDescriptor::CISEE_ARRAY_BEGIN
            && $firstElement[0] !== EntityDescriptor::CISSE_ENTITY_BEGIN
            && $firstElement[0] !== EntityDescriptor::CISSE_ENTITY_REF_INDICATOR
        ) {
            $result = FALSE;
        } else {
            $result = TRUE;
        }
        return $result;
    }

    /**
     * @param mixed $lastElement
     * 
     * @return void
     */
    private function dealWithLastElement($lastElement)
    {
        if (
            $lastElement[strlen($lastElement) - 1]!== EntityDescriptor::CISSE_ARRAY_END
            && $lastElement[strlen($lastElement) - 1] !== EntityDescriptor::CISSE_ENTITY_END
        ) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}

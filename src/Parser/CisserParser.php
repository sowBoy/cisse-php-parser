<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\Parser;

use Cisse\Common\EntityDescriptor;
use Cisse\Exception\NotCisseDataException;

/**
 * Here we process the data in CISSE format to return a PHP object.
 *
 * @author sowboy
 */
class CisserParser {
    public function parse($data){
        if(!empty($data)){
            if($data[0] !== EntityDescriptor::CISEE_ARRAY_BEGIN && $data[0] !== EntityDescriptor::CISSE_ENTITY_BEGIN && $data[0] !== EntityDescriptor::CISSE_ENTITY_REF_INDICATOR){
                throw new NotCisseDataException('The start character of the data is not identified as a character marking the start of a CISSE data.', 1);
            }
        }
    }
}

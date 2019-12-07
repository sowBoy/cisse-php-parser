<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\BasicEntity;

use Cisse\Common\CisseCommon;

/**
 * Define the CISSE PHPParser Basic Entity, Example : Word
 *
 * @author sowboy
 */
class BasicEntity extends CisseCommon
{
    private $shortName;
  
    public function getShortName(): string 
    {
        return $this->shortName;
    }
    
    public function setShortName(string $shortName): void
    {
        $this->shortName = $shortName;
    }
}

<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\Common;

/**
 *
 * @author sowboy
 */
abstract class CisseCommon implements CisseCommonInterface
{
    protected $name;
    protected $value;
    
    public function getName(): string 
    {
        return $this->name;
    }
    
     public function getValue(): string 
    {
        return $this->value;
    }
    
    public function setName(string $name): void 
    {
        $this->name = $name;
    }
    
    public function setValue(string $value): void 
    {
        $this->value = $value;
    }
}

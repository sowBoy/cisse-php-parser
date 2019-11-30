<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\BasicEntity;

/**
 * Define the CISSE PHPParser Basic Entity, Example : Word
 *
 * @author sowboy
 */
class BasicEntity implements BasicEntityInterface
{
    private $name;
    private $shortName;
    private $value;
    
    public function getName(): string 
    {
        return $this->name;
    }
    
    public function getShortName(): string 
    {
        return $this->shortName;
    }
    
     public function getValue(): string 
    {
        return $this->value;
    }
    
    public function setName(string $name): void 
    {
        $this->name = $name;
    }
    
    public function setShortName(string $shortName): void
    {
        $this->shortName = $shortName;
    }
    
    public function setValue(string $value): void 
    {
        $this->value = $value;
    }
}

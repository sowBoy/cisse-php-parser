<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\CisseEntity;

/**
 * The CISSE ENTITY
 *
 * @author sowboy
 */
class Entity implements EntityInterface
{
    protected $isReferenced = false;
    protected $name;
    protected $elements;

    public function __construct() {
        $this->elements = [];
    }

    public function getName() {
        return $this->name;
    }
    
    public function isReferenced() {
        return $this->isReferenced;
    }
    
    public function setName(string $name) {
        $this->name = $name;
    }
    
    public function setIsReferenced(bool $isReferenced) {
        $this->isReferenced = $isReferenced;
    }
    
    public function addAttrChildEntity($elements) {
        if(is_array($elements)){
            $this->elements = array_merge($this->elements, $elements);
        } else {
            $this->elements[] = $elements;    
        }
        return $this;
    }
    
    public function getAttrAndChildEntity() {
        return $this->elements;
    }
}

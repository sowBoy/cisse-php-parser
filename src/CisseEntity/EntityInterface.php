<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\CisseEntity;

/**
 *
 * @author sowboy
 */
interface EntityInterface 
{
    public function getName(): string;
    public function isReferenced(): bool;
    public function setName(string $name): void;
    public function setIsReferenced(bool $isReferenced): void;
    public function addAttrChildEntity($elements): void;
    public function getAttrAndChildEntity(): array;
}

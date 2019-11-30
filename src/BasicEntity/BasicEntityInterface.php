<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\BasicEntity;

/**
 * 
 * @author sowboy
 * 
 */
interface BasicEntityInterface 
{
    public function getName(): string;
    public function getShortName(): string;
    public function getValue(): string;
    public function setShortName(string $shortName): void;
    public function setName(string $name): void;
    public function setValue(string $value): void;
}

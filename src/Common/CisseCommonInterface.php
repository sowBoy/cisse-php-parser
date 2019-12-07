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
interface CisseCommonInterface 
{
    public function getName(): string;
    public function getValue(): string;
    public function setName(string $name): void;
    public function setValue(string $value): void;
}

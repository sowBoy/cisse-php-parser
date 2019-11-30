<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\BasicEntity;

use Cisse\Common\CisseCommonInterface;

/**
 * 
 * @author sowboy
 * 
 */
interface BasicEntityInterface extends CisseCommonInterface
{
    public function getShortName(): string;
    public function setShortName(string $shortName): void;
}

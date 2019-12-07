<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\CisseEntity;

use Cisse\Common\CisseCommon;
use Cisse\BasicEntity\BasicEntityInterface;

/**
 * EntityAttribute is the constituent element of any CisseEntity
 *
 * @author sowboy
 */
class EntityAttribute extends CisseCommon implements EntityAttributeInterface
{
    /**
     *
     * @var BasicEntityInterface
     */
    private $type;
    
    public function getType(): BasicEntityInterface
    {
        return $this->type;
    }

    public function setType(BasicEntityInterface $basicEntity): void
    {
        $this->type = $basicEntity;
    }
}

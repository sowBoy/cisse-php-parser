<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\Common;

/**
 * The characters that mark the beginning, the end of a CISSE entity and the separators
 *
 * @author sowboy
 */
class EntityDescriptor {
    const CISSE_ENTITY_BEGIN = '[';
    const CISSE_ENTITY_END = ']';
    const CISSE_TWO_POINT = ':';
    const CISSE_ENTITY_ATTR_BEGIN = '(';
    const CISSE_ENTITY_ATTR_END = ')';
    const CISSE_COMMA = ',';
    const CISSE_ENTITY_REF_INDICATOR = '#@';
    const CISEE_ARRAY_BEGIN = '{';
    const CISSE_ARRAY_END = '}';
    const CISSE_HASHTAG = '#';
}

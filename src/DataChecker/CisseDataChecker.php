<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\DataChecker;

use Cisse\Common\EntityDescriptor;

/**
 * Check the CISSE DATA
 *
 * @author sowboy
 */
class CisseDataChecker
{
    public static function isCisseBeginCharacter($data)
    {
        $result = FALSE;
        if (!empty($data)) {
            if (
                $data[0] !== EntityDescriptor::CISEE_ARRAY_BEGIN
                && $data[0] !== EntityDescriptor::CISSE_ENTITY_BEGIN
                && $data[0] !== EntityDescriptor::CISSE_ENTITY_REF_INDICATOR
            ) {
                $result = FALSE;
            } else {
                $result = TRUE;
            }
        }
        return $result;
    }

    public static function isCisseEndCharacter($data)
    {
        $nbChar = count($data);
        $result = false;
        if (!empty($data)) {
            if (
                $data[$nbChar - 1] !== EntityDescriptor::CISSE_ARRAY_END
                && $data[$nbChar - 1] !== EntityDescriptor::CISSE_ENTITY_END
            ) {
                $result = false;
            }else{
                $result = true;
            }
        }
        return $result;
    }
}

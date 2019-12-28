<?php

/*
 * This file is part of CISSE PHPParser
 * (c) Boubacar Sow <boubacar.sowboy@gmail.com>
 */

namespace Cisse\Exception;

/**
 * Description of NotCisseDataException
 *
 * @author sowboy
 */
class NotCisseDataException extends \Exception
{
  
  public function __construct($message, $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
  
  public function __toString() {
    return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
  }
}

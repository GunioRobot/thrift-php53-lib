<?php

namespace Thrift\Exception;

use Thrift\Exception\TException;

class TProtocolException extends TException {
  const UNKNOWN = 0;
  const INVALID_DATA = 1;
  const NEGATIVE_SIZE = 2;
  const SIZE_LIMIT = 3;
  const BAD_VERSION = 4;

  function __construct($message=null, $code=0) {
    parent::__construct($message, $code);
  }
}
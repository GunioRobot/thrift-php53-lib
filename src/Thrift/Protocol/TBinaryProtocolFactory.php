<?php

namespace Thrift\Protocol;

use Thrift\Protocol\TProtocolFactory;
use Thrift\Protocol\TBinaryProtocol;

class TBinaryProtocolFactory implements TProtocolFactory {
  private $strictRead_ = false;
  private $strictWrite_ = false;

  public function __construct($strictRead=false, $strictWrite=false) {
    $this->strictRead_ = $strictRead;
    $this->strictWrite_ = $strictWrite;
  }

  public function getProtocol($trans) {
    return new TBinaryProtocol($trans, $this->strictRead, $this->strictWrite);
  }
}
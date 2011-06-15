<?php

namespace Thrift\Protocol;

use Thrift\Protocol\TBinaryProtocol;

class TBinaryProtocolAccelerated extends TBinaryProtocol {
  public function __construct($trans, $strictRead=false, $strictWrite=true) {
    // If the transport doesn't implement putBack, wrap it in a
    // TBufferedTransport (which does)
    if (!method_exists($trans, 'putBack')) {
      $trans = new TBufferedTransport($trans);
    }
    parent::__construct($trans, $strictRead, $strictWrite);
  }
  public function isStrictRead() {
    return $this->strictRead_;
  }
  public function isStrictWrite() {
    return $this->strictWrite_;
  }
}
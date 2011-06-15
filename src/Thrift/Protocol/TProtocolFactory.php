<?php

namespace Thrift\Protocol;

interface TProtocolFactory {
  /**
   * Build a protocol from the base transport
   *
   * @return TProtocol protocol
   */
  public function getProtocol($trans);
}
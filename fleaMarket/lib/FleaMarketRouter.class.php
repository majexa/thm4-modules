<?php

class FleaMarketRouter extends ThmFourRouter {
  function _getController() {
    return new CtrlFleaMarketDefault($this);
  }
}
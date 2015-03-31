<?php

class FleaMarketRouter extends DefaultRouter {
  function _getController() {
    return new CtrlFleaMarketDefault($this);
  }
}
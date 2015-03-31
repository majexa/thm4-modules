<?php

class AfishaRouter extends DefaultRouter {

  function _getController() {
    return new CtrlAfishaDefault($this);
  }

}

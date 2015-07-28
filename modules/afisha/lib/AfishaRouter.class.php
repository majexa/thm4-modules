<?php

class AfishaRouter extends ThmFourRouter {

  function _getController() {
    return new CtrlAfishaDefault($this);
  }

}

<?php

class AfishaRouter extends ThmFourRouter {

  function _getController() {
    if (ThmFourRouter::isMobile()) return new CtrlMobileAfishaDefault($this);
    return new CtrlAfishaDefault($this);
  }

}


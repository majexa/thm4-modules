<?php

class VideoRouter extends ThmFourRouter {

  function _getController() {
    return new CtrlVideoDefault($this);
  }

}

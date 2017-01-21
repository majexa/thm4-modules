<?php

class MasterAlbumRouter extends ThmFourRouter {

  function _getController() {
    if (isset($this->req->params[0])) {
      $class = 'CtrlMasterAlbum'.ucfirst($this->req->params[0]);
      if (class_exists($class)) return new $class($this);
      else return new CtrlMasterAlbumDefault($this);
    } else {
      return new CtrlMasterAlbumDefault($this);
    }
  }

}

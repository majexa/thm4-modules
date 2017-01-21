<?php

class AuthorAlbumRouter extends ThmFourRouter {

  function _getController() {
    die2(222);
    if (isset($this->req->params[0])) {
      $class = 'CtrlAuthorAlbum'.ucfirst($this->req->params[0]);
      if (class_exists($class)) return new $class($this);
      else return new CtrlAuthorAlbumDefault($this);
    } else {
      return new CtrlAuthorAlbumDefault($this);
    }
  }

}

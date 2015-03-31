<?php

class WebStudiosRouter extends DefaultRouter {

  function _getController() {
    if (isset($this->req->params[0])) {
      $class = 'CtrlWebStudios'.ucfirst($this->req->params[0]);
    } else {
      $class = 'CtrlWebStudiosDefault';
    }
    return new $class($this);
  }

}
<?php

class CommunityBlogRouter extends DefaultRouter {

  function _getController() {
    if (isset($this->req->params[0])) {
      $class = 'CtrlCommunityBlog'.ucfirst($this->req->params[0]);
      if (class_exists($class)) return new $class($this);
      else return new CtrlCommunityBlogDefault($this);
    } else {
      return new CtrlCommunityBlogDefault($this);
    }
  }

}

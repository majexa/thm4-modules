<?php

class CommunityBlogRouter extends DefaultRouter {

  function _getController() {
    if (isset($this->req->params[0]) and $this->req->params[0] == 'profile') {
      return new CtrlCommunityBlogProfile($this);
    } else {
      return new CtrlCommunityBlogDefault($this);
    }
  }

}

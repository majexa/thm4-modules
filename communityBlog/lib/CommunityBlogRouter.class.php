<?php

class CommunityBlogRouter extends DefaultRouter {

  function _getController() {
    return new CtrlCommunityBlogDefault($this);
  }

}

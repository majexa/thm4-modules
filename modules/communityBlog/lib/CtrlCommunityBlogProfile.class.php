<?php

class CtrlCommunityBlogProfile extends CtrlCommon {
  use DdCrudParamFilterCtrl;

  function getStrName() {
    return 'profile';
  }

  protected function id() {
    return Auth::get('id');
  }

  function action_json_edit() {
    $im = $this->getIm();
    $im->form->action = $this->req->options['uri'];
    if ($item = $im->items->getItemByField('userId', $this->id())) {
      if ($im->requestUpdate($item['id'])) return true;
    } else {
      if ($im->requestCreate()) return true;
    }
    $this->jsonFormAction($im->form);
    return false;
  }

}
<?php

class FieldEImagesPreview extends FieldEImage {

  function defineOptions() {
    return array_merge(parent::defineOptions(), [
      'multiple' => true
    ]);
  }
  protected function htmlNav() {
    return '<div style="float:right; color:#f00">control not designed yet<br>'.St::enum($this->dataValue(), '<br>').'</div>';
  }

}

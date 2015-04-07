<?php

class FieldEImagesPreview extends FieldEImage
{

    function defineOptions()
    {
        return array_merge(parent::defineOptions(), [
          'multiple' => true
        ]);
    }

    protected function htmlNav()
    {
        $s = '';
        if (($imagePaths = $this->dataValue())) {
            foreach ($imagePaths as $imagePath) {
                $imagePath = '/'.UPLOAD_DIR.'/'.$imagePath;
                //$s .= '<a href="'.$this->form->options['deleteFileUrl'].'&fieldName='.$this->options['name'].'" class="iconBtn noborder delete confirm" title="Удалить"><i></i></a>';
                $s .= '<a href="'.$imagePath.'" class="thumb lightbox" title="Текущее изображение"><img src="'.Misc::getFilePrefexedPath($imagePath, 'sm_').'" /></a>';
            }
        }
        return <<<HTML
<style>
.fileNavImagesPreview {
text-align: right;
width: 200px;
margin-right: -10px;
}
.fileNav.fileNavImagesPreview .thumb {
display: inline-block;
margin: 0 8px 3px 0;
}
</style>
<div class="fileNav fileNavImagesPreview">
  <div class="">
    $s
  </div>
</div>
HTML;
    }

}

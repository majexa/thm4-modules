<div class="bookmarks">
  <?= $d['pageTitle'] ?>
</div>
<div class="colBody">
  <?= $d['html'] ?>
</div>

<script>
  <? if ($d['mobile']) { ?>
  var cBody = document.getElement('.cBody');
  new Ngn.DdoTitleSlider(
    new Ngn.FramesSlider(new Element('div', {'class': 'pages'}).
        inject(cBody.getParent()).
        adopt(cBody),
      {
        frameCssClass: 'cBody'
      }
    )
  );
  <? } ?>
  new Ngn.DdoItemsEdit();
  new Ngn.DdoCutText();
  Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'));
</script>
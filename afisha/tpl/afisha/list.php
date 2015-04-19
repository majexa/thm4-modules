<div class="bookmarks">
  <?= $d['pageTitle'] ?>
</div>
<div class="colBody">
  <?= $d['html'] ?>
</div>

<script>

  <? if ($d['mobile']) { ?>
  new Element('div', {'class': 'title'}).inject(document.getElement('.header .container'));
  new Ngn.DdoTitleSlider(
    new Ngn.FramesSlider.MapContents(document, document.getElement('.pages'), {
      frameCssClass: 'cBody',
      map: {
        '.bookmarks': '.header .container .title'
      }
    })
  );
  <? } else { ?>
  new Ngn.DdoItemsEdit();
  new Ngn.DdoCutText();
  Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'));
  <? } ?>
</script>
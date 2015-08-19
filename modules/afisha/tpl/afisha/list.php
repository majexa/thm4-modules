<div class="pNums pNumsTop">
  <?= $d['pNums'] ?>
</div>
<?= $d['html'] ?>
<div class="pNums pNumsBottom">
  <?= $d['pNums'] ?>
</div>

<script>
  <? if ($d['mobile']) { ?>
  new Element('div', {'class': 'title'}).inject(document.getElement('.header .container'));
  Ngn.FramesSlider.MapContents.Thm = new Class({
      Extends: Ngn.FramesSlider.MapContents,
      _getSourceHtml: function(frameN, sourceSelector, force) {
          return this.parent(frameN, sourceSelector, force).replace(/(<([^>]+)>)/ig, '');
      }
  });
  new Ngn.DdoTitleSlider(
    new Ngn.FramesSlider.MapContents.Thm(document, document.getElement('.pages'), {
      frameCssClass: 'cBody',
      map: {
        '.bookmarks': '.header .container .title'
      }
    }), {
      subscriptFields: [<? if (!$d['today']) { ?>'eventDate', <? } ?>'eventTime', 'eventPrice', 'eventPlace']
    }
  );
  <? } else { ?>
  new Ngn.DdoItemsEdit();
  new Ngn.DdoCutText();
  Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'));
  <? } ?>
</script>
<?= $d['html'] ?>

<script>
  new Element('div', {'class': 'title'}).inject(document.getElement('.header .container'));
  Ngn.FramesSlider.MapContents.Thm = new Class({
    Extends: Ngn.FramesSlider.MapContents,
    _getSourceHtml: function(frameN, sourceSelector, force) {
      return this.parent(frameN, sourceSelector, force).replace(/(<([^>]+)>)/ig, '');
    }
  });
  Ngn.DdoSlider.Afisha = new Class({
    Extends: Ngn.DdoSlider,
    getTitle: function(eItem) {
      return eItem.getElement('.f_title').get('text');
    }
  });
  new Ngn.DdoSlider(
    new Ngn.FramesSlider.MapContents.Thm(document, document.getElement('.pages'), {
      frameCssClass: 'cBody',
      map: {
        '.bookmarks': '.header .container .title'
      }
    }), {
      firstPageElementNames: ['title'],
      bothPagesElementNames: [<? if (!$d['today']) { ?>'eventDate', <? } ?>'eventTime', 'eventPrice', 'eventPlace']
    }
  );
</script>
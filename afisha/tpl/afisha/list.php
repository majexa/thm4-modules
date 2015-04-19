<div class="bookmarks">
  <?= $d['pageTitle'] ?>
</div>
<div class="colBody">
  <?= $d['html'] ?>
</div>


<script>
  Ngn.FramesSlider.MapContents = new Class({
    Extends: Ngn.FramesSlider,

    options: {
      map: {}
    },

    mapStorage: {},

    initialize: function(rootContainer, framesContainer, options) {
      this.parent(framesContainer, options);
      this.rootContainer = rootContainer;
      for (var frameN=0; frameN<this.frames.length; frameN++) {
        this.addFrameStorageMap(frameN);
      }
      this.fx.addEvent('start', function() {
        c('MOVE TO: ' + this.frameN);
        if (this.mapStorage[this.frameN]) {
          for (var selector in this.mapStorage[this.frameN]) {
            this.rootContainer.getElement(selector).set('html', this.mapStorage[this.frameN][selector]);
          }
        }
      }.bind(this));
    },

    addFrameStorageMap: function(frameN) {
      for (var selector in this.options.map) {
        var el = this.frames[frameN].getElement(selector);
        if (!this.mapStorage[frameN]) this.mapStorage[frameN] = {};
        if (!el) {
          this.mapStorage[frameN][this.options.map[selector]] = '';
          return;
        }
        this.mapStorage[frameN][this.options.map[selector]] = el.get('html');
        el.dispose();
      }
    },

    pushFrame: function(html) {
      this.parent(html);
      this.addFrameStorageMap(this.frames.length - 1);
    }

  });

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
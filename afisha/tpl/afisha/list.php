<div class="bookmarks">
  <?= $d['pageTitle'] ?>
</div>
<div class="colBody">
  <?= $d['html'] ?>
</div>
<script>

//var pageSlider = new Class({
//  Implements: [Options, Events],
//  options: {
//    frames: '.frame',
//    startFrame: 0,
//    transition: Fx.Transitions.Linear,
//    duration: 700,
//  },
//  initialize: function(options) {
//    this.setOptions(options);
//    this.setFrameSize();
//    this.slider = new Element('div', {
//      id: 'Slider',
//      styles: {
//        width: '100%',
//        height: '100%',
//        overflow: 'hidden'
//      }
//    }).inject(document.body);
//    this.frameContainer = new Element('div', {
//      id: 'frameContainer',
//      styles: {
//        width: $$(this.options.frames).length * this.setFrameSize()
//      }
//    }).inject(this.slider).adopt($$(this.options.frames));
//    this.status = 0;
//    this.fx = new Fx.Tween(this.frameContainer, {
//      property: 'margin-left',
//      duration: this.options.duration,
//      transition: this.options.transition,
//      link: 'ignore',
//      onStart: (function(){this.status=1;}).bind(this),
//      onComplete: (function(){this.status=0;}).bind(this)
//    });
//    window.onresize = this.updateframeContainer.bind(this);
//  },
//  setFrameSize: function() {
//    var winSize = window.getSize();
//    $$(this.options.frames).each(function(i) {
//      this.setOverflow(i);
//      i.setStyles({width: winSize.x, height: winSize.y});
//    }, this);
//    return winSize.x;
//  },
//  showPrev: function(e) {
//    if (Math.abs(this.getCurrPos().toInt()) == 0) {
//      this.options.startFrame = 0;
//      return;
//    } else {
//      if (this.status == 0) {
//        this.fx.start(this.getCurrPos(), (parseInt(this.getCurrPos()) + parseInt(this.setFrameSize())) );
//        this.options.startFrame = this.options.startFrame - 1;
//      } else return;
//    }
//  },
//  showNext: function(e) {
//    if ((this.frameContainer.getStyle('width').toInt() - this.setFrameSize()) <= Math.abs(this.getCurrPos().toInt())) {
//      this.options.startFrame = 4;
//      return;
//    } else {
//      if (this.status == 0) {
//        this.options.startFrame = this.options.startFrame + 1;
//        this.fx.start(this.getCurrPos(), (parseInt(this.getCurrPos()) - parseInt(this.setFrameSize())));
//      } else return;
//    }
//  },
//  getCurrPos: function() {
//    return (this.frameContainer.getStyle('margin-left'));
//  },
//  jumpToFrame: function(p) {
//   this.setFrameSize();
//   this.frameContainer.setStyle('margin-left', -(p*this.setFrameSize()));
//  },
//  goToFrame: function(i) {
//    if (this.status == 1) {
//      return;
//    } else {
//      if (i < this.options.startFrame) {
//        var x = this.options.startFrame - i;
//        this.fx.start(this.getCurrPos(), (parseInt(this.getCurrPos()) + (x*parseInt(this.setFrameSize()))) );
//        this.options.startFrame = i;
//      } else if (this.options.startFrame < i) {
//        var x = i - this.options.startFrame;
//        this.fx.start(this.getCurrPos(), (parseInt(this.getCurrPos()) - (x*parseInt(this.setFrameSize()))) );
//        this.options.startFrame = i;
//      } else return;
//    }
//  },
//  setOverflow: function(elem) {
//    if (window.getSize()['y'] < elem.getSize()['y']) elem.setStyle('overflow-y', 'scroll');
//  },
//  updateframeContainer: function() {
//    this.jumpToFrame(this.options.startFrame);
//    $$(this.options.frames).each(function(i) {
//      this.setOverflow(i);
//    }, this);
//    this.frameContainer.setStyles({width: ($$(this.options.frames).length * this.setFrameSize())});
//  }
//});

new Ngn.DdoItemsEdit();
new Ngn.DdoCutText();
Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'));

</script>
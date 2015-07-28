<? $this->tpl('bookmarkContent', $d) ?>

<script>
  new Ngn.DdoItemEdit(
    <?= $d['item']['id'] ?>,
    new Element('div', {'class': 'itemPageEdit'}).inject(document.getElement('.col2 .bColBody'), 'top'),
    {
      onEditComplete: function(id) {
        window.location.reload();
      }
    }
  );
</script>
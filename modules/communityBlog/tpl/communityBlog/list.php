<div class="pNums"><?= $d['pNums'] ?></div>
<?= $d['html'] ?>

<script>
new Ngn.DdoItemsEdit();

Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'), {
  basePath: '<?= $d['basePath']?>'
});
</script>
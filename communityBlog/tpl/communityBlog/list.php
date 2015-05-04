<div class="pNums"><?= $d['pNums'] ?></div>
<?= $d['html'] ?>

<script>
Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'), {
  basePath: '<?= $d['basePath']?>'
});
</script>
<div class="pNums pNumsTop"><?= $d['pNums'] ?></div>
<div class="communityBlogHomeList">
  <?= $d['html'] ?>
</div>
<div class="pNums pNumsBottom"><?= $d['pNums'] ?></div>

<script>
Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'), {
  basePath: '<?= $d['basePath']?>'
});
</script>
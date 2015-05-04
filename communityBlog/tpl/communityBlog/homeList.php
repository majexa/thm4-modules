<style>
  .f_text a {
    font-size: 15px;
    font-family: Georgia;
    font-style: italic;
    text-decoration: none;
  }
</style>

<div class="pNums"><?= $d['pNums'] ?></div>
<div class="communityBlogHomeList">
<?= $d['html'] ?>
</div>

<script>
Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'), {
  basePath: '<?= $d['basePath']?>'
});
</script>
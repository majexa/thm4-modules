<div class="communityBlogHomeList">
<?= $d['html'] ?>
</div>

<script>
Ngn.Btn.AddAuthorized(document.getElement('.bookmarks'), {
  basePath: '<?= $d['basePath']?>'
});
</script>
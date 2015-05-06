<style>
.authors .item {
display: inline-block;
margin: 0 10px 10px 0;
width: 100px;
}
</style>

<div class="authors">
<? foreach ($d['items'] as $v) { ?>
  <div class="item">
    <a href="/blog/user/<?= $v['id'] ?>">
      <img src="/<?= $v['image'] ?>">
      <div><?= $v['name'] ?></div>
    </a>
  </div>
<? } ?>
</div>

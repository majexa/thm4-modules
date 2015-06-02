<style>
    .authors {
        padding: 15px 0 0 30px;
    }
.authors .item {
float: left;
margin: 0 10px 10px 0;
    width: 100px;
    height: 150px;

    text-align: center;
    font-size: 10px;
}
.authors .item .tit {
    margin-top: 5px;
}
.authors .item a {
    color: #000;
    text-decoration: none;

}
.authors .item a:hover {
    text-decoration: underline;
}
</style>

<div class="authors">
<? foreach ($d['items'] as $v) { ?>
  <div class="item">
    <a href="/blog/user/<?= $v['id'] ?>">
      <img src="/u/<?= $v['image'] ?>">
      <div class="tit"><?= $v['name'] ?></div>
    </a>
  </div>
<? } ?>
</div>

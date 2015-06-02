<style>
  .authors {
    padding: 15px 0 0 30px;
  }
  .authors .item {
    float: left;
    margin: 0 10px 10px 0;
    width: 100px;
    height: 160px;
    text-align: center;
    font-size: 10px;
    position: relative;
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
  .authors .postCnts {
    position: absolute;
    width: 15px;
    top: 5px;
    right: 13px;
  }
  .authors .postCnt {
    background: #ccc;

    border-radius: 20px;
    padding: 5px;
    width: 13px;
    margin-bottom: 2px;
    cursor: default;
  }
  .authors .postCnt.hour {
    background: #ED0461;
    color: #fff;
  }
  .authors .postCnt.day {
    background: #0078AB;
    color: #fff;
  }

</style>
<?
$countTitles = [
  'week' => 'Постов за неделю',
  'day' => 'Постов за день',
  'hour' => 'Постов за последний час',
];
?>
<div class="authors">
  <? foreach ($d['items'] as $v) { ?>
    <div class="item">
      <div class="postCnts">
        <? foreach ($d['postCounts'] as $k => $counts) { ?>
          <? if ($d['postCounts'][$k][$v['userId']]) { ?>
            <div class="postCnt <?= $k ?>" title="<?= $countTitles[$k] ?>"><?= $d['postCounts'][$k][$v['userId']] ?></div>
          <? } ?>
        <? } ?>
      </div>
      <a href="/blog/user/<?= $v['id'] ?>">
        <img src="<?= $v['image'] ? '/u/'.$v['image'] : '/i/img/empty.png' ?>">
        <div class="tit"><?= $v['name'] ?></div>
      </a>
    </div>
  <? } ?>
</div>

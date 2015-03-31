<div class="mainContent ddItems list str_portfolio">
  <? foreach ($d['items'] as $v) { ?>
    <div class="item" data-id="<?= $v['id'] ?>" data-userId="<?= $v['userId'] ?>">
      <div class="imageBody">
        <div class="image">
          <? if ($v['available']) { ?>
            <img src="/<?= UPLOAD_DIR.'/captures/'.$v['id'].'.png' ?>" alt="<?= $v['title'] ?>">
          <?
          }
          else {
            ?>
            <img src="/<?= UPLOAD_DIR.'/captures/'.$v['id'].'.png' ?>" alt="<?= $v['title'] ?>" class="nonActive">
          <? } ?>
        </div>
        <div class="text">
          <a name="portfolio<?= $v['id'] ?>"></a>
          <?= $v['html'] ?>
        </div>
      </div>
      <div class="clear"></div>
      <div class="line"></div>
    </div>
  <? } ?>
</div>
<script>
  new Ngn.DdoItemsEdit();
</script>
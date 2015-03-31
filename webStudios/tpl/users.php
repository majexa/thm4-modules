<div class="users" style="padding: 10px 0 0 60px">
  <? foreach ($d['users'] as $v) { ?>
    <div class="item<?= $v['square'] ? ' square' : '' ?>">
      <a<?= $v['available'] ? ' href="/user/'.$v['userId'].'/portfolio"' : '' ?>>
        <? if (!$v['square']) { ?>
          <div class="dummy"></div>
        <? } ?>
        <img src="<?= $v['md_image'] ?>" title="<?= $v['title'] ?>">
      </a>
      <p><?= $v['name'] ?></p>
    </div>
  <? } ?>
  <div class="clear"></div>
</div>
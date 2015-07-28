<div class="colBody blockText">
  <h2><?= $d['info']['title'] ?></h2>
  <? if ($d['info']['image']) { ?>
    <p><img src="<?= $d['info']['md_image'] ?>" width="200"></p>
  <? } ?>
  <p><small><?= $d['info']['text'] ?></small></p>
  <p>
    <a href="<?= $d['info']['url'] ?>" target="_blank" class="dgray">
      <img src="http://www.google.com/s2/favicons?domain=<?= Misc::getHost($d['info']['url']) ?>" class="icon18" /><?= $d['info']['url'] ?>
    </a>
  </p>
</div>
<div class="line"></div>

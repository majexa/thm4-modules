<div class="colBody blockText" id="profileBlock">
  <? if ($d['profile']['link']) { ?>
    <h2><a href="<?= $d['profile']['link'] ?>"><?= $d['profile']['name'] ?></a></h2>
  <? } else { ?>
    <h2><?= $d['profile']['name'] ?></h2>
  <? } ?>
  <p><small><?= $d['profile']['text'] ?></small></p>
  <p>
    <a href="/blog/<?= $d['profile']['id'] ?>" target="_blank" class="dgray">
      <img src="<?= $d['profile']['image'] ?>">
    </a>
  </p>
</div>
<div class="line"></div>
<!--
<script>
  Ngn.Btn.btn1('Редактировать', 'edit').inject($('profileBlock')).addEvent('click', function() {
    new Ngn.Dialog.RequestForm({
      title: 'Редактирование профиля',
      url: '<?= $d['basePath'] ?>/profile/json_edit',
      width: 300
    });
  });
</script>
-->
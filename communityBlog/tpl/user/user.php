<div class="colBody blockText" id="profileBlock">
  <h2>U SUCK</h2>
</div>
<div class="line"></div>
<script>
  Ngn.Btn.btn1('Редактировать', 'edit').inject($('profileBlock')).addEvent('click', function() {
    new Ngn.Dialog.RequestForm({
      title: 'Редактирование профиля',
      url: '<?= $d['basePath'] ?>/profile/json_edit',
      width: 300
    });
  });
</script>
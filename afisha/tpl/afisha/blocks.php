<div class="bColBody blockMenu blockCalendar">
  <?= $d['calendar'] ?>
  <script>
    new Ngn.CalendarMonthSlider($('calendarHeader'));
  </script>
</div>
<div class="bColBody blockMenu blockCalendar">
  <center><a href="<?= $d['basePath'] ?>/d.<?= date('j') ?>;<?= date('n') ?>;<?= date('Y') ?>.dateCreate">Добавлено сегодня</a></center>
</div>

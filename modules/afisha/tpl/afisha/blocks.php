<div class="bColBody blockMenu blockCalendar">
  <?= $d['calendar'] ?>
  <script>
    new Ngn.CalendarMonthSlider($('calendarHeader'), {
      basePath: '<?= $d['basePath'] ?>'
    });
  </script>
</div>

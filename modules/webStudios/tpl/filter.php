<div class="bColBody blockMenu">
  <p>Хотите заказать сайт в Нижнем Новгороде? Посмотрите портфолио местных студий!</p>
  <?php
  $items = new DdItems('portfolio');
  $items->cond->addTodayFilter('dateUpdate');
  ?>
  <h2>Обновлено сегодня: <?= $items->count() ?></h2>
  <a href="<?= Tt()->getPath(1).'/v.available.0' ?>">Студии сайты которых не работают</a>
</div>
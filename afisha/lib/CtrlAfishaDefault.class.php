<?php

class CtrlAfishaDefault extends CtrlThemeFour {
  use DdCrudParamFilterCtrl;

  protected function themeFourModule() {
    return 'afisha';
  }

  protected function id() {
    return $this->req->rq('id');
  }

  protected function getStrName() {
    return 'afisha';
  }

  protected function getParamActionN() {
    return 0;
  }

  protected function paramFilterN() {
    return 0;
  }

  protected function paramFilterDateField() {
    return 'eventDate';
  }

  function oProcessForm(Form $form) {
    if ($this->action == 'json_new') return;
    $form->options['deleteFileUrl'] = $this->originalReq()->path().'?id='.$this->id().'&a=deleteFile';
  }

  protected function initCalendar() {
    $calendar = new AfishaCalendar($this->d['basePath']);
    $calendar->selectedMonth = $this->month;
    $calendar->selectedYear = $this->year;
    $calendar->selectedDay = $this->day;
    $this->d['calendar'] = $calendar->getMonthView($this->month ?: date('n'), $this->year ?: date('Y'));
  }

  function action_edit() {
    $this->getIm();
  }

  function action_default() {
    $ddo = new DdoFour($this->getStrName(), 'siteItems');
    $ddo->disallowEmpties = ['price', 'text'];
    $ddo->groupFrom('title');
    $items = $this->items();
    $items->n = 100;


    $todayFilter = $this->setFilterDate(date('j;n;Y'), 'eventDate', true);
    $items->cond->setOrder('eventDate DESC, eventTime');
    $_items = $items->getItems();

    $this->d['html'] = $ddo->setItems($_items)->els();
    $this->d['tpl'] = 'afisha/list';
    $this->d['blocksTpl'] = 'afisha/blocks';
    $this->d['layout'] = 'cols2';
    $this->initCalendar();

    if ($this->day) {
      $cnt = ' ('.count($_items).' шт.)';
      if ($todayFilter) {
        $this->setPageTitle('Добавлено сегодня'.$cnt);
      } else {
        $this->setPageTitle($this->day.' '.Config::getVar('ruMonths2')[$this->month].' '.$this->year.$cnt);
      }
    } elseif ($this->month) {
      $this->setPageTitle(Config::getVar('ruMonths')[$this->month].' '.$this->year);
    }
  }

}
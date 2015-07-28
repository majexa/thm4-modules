<?php

class CmsmagImport {

  /**
   * @var DdItemsManager
   */
  protected $infoIm;

  function __construct() {
    $this->infoIm = DdCore::imSystem('info');
    $this->portfolioIm = DdCore::imSystem('portfolio');
  }

  function start() {
    $studiosParser = (new CmsmagStudiosParser('http://www.cmsmagazine.ru/creators/nizhny-novgorod/'));
    $studiosParser->onItem = function (CmsmagStudio $studio) {
      if ($studio['login'] == 'r52') return;
      output("Processing {$studio['login']}");
      if (!($studioUser = DbModelCore::get('users', $studio['login'], 'login'))) {
        $studioUser = DbModelCore::createAndGet('users', [
          'active' => true,
          'login'  => $studio['login'],
          'email'  => 'dummy@dummy.com',
          'pass'   => 123
        ]);
        output("User created ".$studioUser['id']);
      }
      if (!($info = $this->infoIm->items->getItemByField('userId', $studioUser['id']))) {
        if ($studio['image']) {
          $studio->r['image'] = [
            'tmp_name' => File::copy($studio['image'], TEMP_PATH.'/image')
          ];
        }
        $id = $this->infoIm->create(array_merge([
          'userId'   => $studioUser['id'],
          'isStudio' => true
        ], $studio->r));
        output("Info created $id");
      }
      $portfolioParser = new CmsmagPortfolioParser(//
        'http://www.cmsmagazine.ru/creators/'.$studio['login'].'/works/?pn=all');
      $portfolioParser->onItem = function ($work) use ($studioUser) {
        if (!($id = $this->portfolioIm->create(array_merge(['userId' => $studioUser['id']], $work), false))) {
          print "\n".CliColors::colored('Work not created.', 'red')." Error: ".$this->portfolioIm->form->lastError."\n";
          return;
        }
        print ".";
        //output("Work created $id");
      };
      $portfolioParser->start();
    };
    $studiosParser->start();
  }

}

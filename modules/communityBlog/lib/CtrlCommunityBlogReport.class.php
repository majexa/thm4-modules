<?php

class CtrlCommunityBlogReport extends CtrlCommunityBlog {

  function action_default() {
    //if (!Misc::isAdmin()) throw new Error404;
    $userIds = db()->selectCol("SELECT userId FROM dd_i_communityBlog WHERE userId IS NOT NULL GROUP BY userId");
    $postCounts = [];
    $postCounts['week'] = DdUseful::userRecordCounts('communityBlog', strtotime('-1 week'));
    $postCounts['day'] = DdUseful::userRecordCounts('communityBlog', strtotime('-1 day'));
    $r[] = [
      'Юзер',
      'в неделю',
      'в день',
    ];
    $names = db()->selectCol("SELECT userId AS ARRAY_KEY, name FROM dd_i_profile");
    foreach ($userIds as $userId) {
      $r[] = [
        'userId' => isset($names[$userId]) ? $names[$userId] : "[$userId]",
        'week'   => isset($postCounts['week'][$userId]) ? $postCounts['week'][$userId] : 0,
        'day'    => isset($postCounts['day'][$userId]) ? $postCounts['day'][$userId] : 0,
      ];
    }
    $r = Arr::sortByOrderKey($r, 'week', SORT_DESC);
    $this->d['tpl'] = 'htmlContent';
    $this->d['html'] = Tt()->getTpl('common/table', $r);
  }

}
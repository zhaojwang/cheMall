<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/29 0029
 * Time: 上午 9:53
 */

namespace app\api\controller;

use app\common\model\UserVbNote;

class UserPurchase extends ApiBase {

  protected $userVbMdl;
  protected function _initialize () {
    parent::_initialize(); // TODO: Change the autogenerated stub

    $this->userVbMdl = new UserVbNote();
  }


}

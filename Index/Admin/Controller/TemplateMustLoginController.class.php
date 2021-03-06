<?php
/**
 *
 * Created by Dream.
 * User: Boxjan
 * Datetime: 18-9-18 下午8:58
 */

namespace Admin\Controller;


class TemplateMustLoginController extends TemplateController
{
    public function _initialize() {
        $this->isNeedLogin = true;
        parent::_initialize();
        $this->assign('user', $this->userInfo['nick_name'] ?
            $this->userInfo['nick_name'] : $this->userInfo['user_name']);
    }
}
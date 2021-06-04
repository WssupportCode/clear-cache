<?php

namespace WS\Services;

use WS\Base;


class UserAccess extends Base
{
    private $user;

    private $arUserGroups = [
        "content" => ["id" => 5],
    ];

    public function __construct() {
        global $USER;
        $this->user = $USER;
    }

    public function isContent() {
        $groupId = $this->arUserGroups["content"]["id"];
        $groups = $this->user->GetUserGroupArray();
        if (in_array($groupId, $groups)) {
            return true;
        }
        return false;
    }
}
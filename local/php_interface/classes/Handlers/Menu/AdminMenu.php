<?php

namespace WS\Handlers\Menu;

use WS\Services\UserAccess;
use WS\Tools\Module;

class AdminMenu
{
    public static function className() {
        return get_called_class();
    }

    public static function addItemsAdminMenu(&$adminMenu, &$moduleMenu) {
        if (!self::contentManagerPermissions()) {
            return;
        }

        $moduleMenu[] = [
            "parent_menu" => "global_menu_content",
            "text" => 'Проект',
            "url" => "",
            "icon" => "form_menu_icon",
            "page_icon" => "form_page_icon",
            "items_id" => "project_menu",
            "more_url" => [],
            "items" => [
                [
                    'text' => 'Очистка кеша',
                    'url' => '/bitrix/admin/custom_cache.php',
                    'icon' => 'form_menu_icon',
                    'page_icon' => 'form_page_icon',
                ]
            ]
        ];
    }

    private static function contentManagerPermissions() {
        /** @var UserAccess $userAccess */
        $userAccess = Module::getInstance()->getService('userAccess');
        return $userAccess->isContent();
    }
}
<?

use Bitrix\Main\EventManager;
use WS\Handlers\Menu\AdminMenu;

$bxEventManager = EventManager::getInstance();
$bxEventManager->addEventHandler("main", "OnBuildGlobalMenu", array(AdminMenu::className(), "addItemsAdminMenu"));
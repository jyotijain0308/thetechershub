<?php

use Modules\Ladmin\Menus\Account;
use Modules\Ladmin\Menus\Access;
use Modules\Ladmin\Menus\System;
use Modules\Blog\Menus\PostMenu;

/**
 * Declaration your top parent of sidebar menu
 */

return [
    PostMenu::class,

    Account::class,

    Access::class,

    System::class
];

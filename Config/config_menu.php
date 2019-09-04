<?php

return [

    'styles' => [
        'navbar' => \Modules\Dashboard\Components\Menu\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \Modules\Dashboard\Components\Menu\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \Modules\Dashboard\Components\Menu\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \Modules\Dashboard\Components\Menu\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \Modules\Dashboard\Components\Menu\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \Modules\Dashboard\Components\Menu\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \Modules\Dashboard\Components\Menu\Presenters\Admin\AdminltePresenter::class,
        'zurbmenu' => \Modules\Dashboard\Components\Menu\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => true,

];

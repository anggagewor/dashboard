<?php
use Modules\Dashboard\Components\Menu\Facades\Menu;
Menu::create('sidebar.dashboard', function($menu) {
	$menu->setPresenter(\Modules\Dashboard\Presenters\DashboardMenuPresenter::class);
	$menu->route(
        'dashboard.index', // route name
        'Dashboard', // title
        [], // route parameters
        [
        	'icon' => 'fa fa-fw fa-tachometer-alt mr-3'
        ] // attributes
    );
    $menu->route(
        'dashboard.modules', // route name
        'Modules', // title
        [], // route parameters
        [
            'icon' => 'fa fa-fw fa-tachometer-alt mr-3'
        ] // attributes
    );
});

Menu::create('navbar-left.dashboard', function($menu){
	$menu->setPresenter(\Modules\Dashboard\Presenters\DashboardNavbarPresenter::class);
	$menu->url('#', 'Link',['class'=>'nav-link','icon'=>'far fa-link']);

	$menu->dropdown('Dropdown', function ($sub) {
        $sub->url('/settings/design', 'Design',['class'=>'dropdown-item']);
        $sub->divider();
        $sub->url('logout', 'Logout',['class'=>'dropdown-item']);
    });


});


Menu::create('navbar-right.dashboard', function($menu){
	$menu->setPresenter(\Modules\Dashboard\Presenters\DashboardNavbarRightPresenter::class);
	$menu->url('#', 'Link',['class'=>'nav-link','icon'=>'far fa-link']);
	$menu->url('#', 'Link',['class'=>'nav-link','icon'=>'far fa-link']);
	$menu->url('#', 'Link',['class'=>'nav-link','icon'=>'far fa-link']);

	$menu->dropdown('Dropdown', function ($sub) {
        $sub->url('/settings/design', 'Design',['class'=>'dropdown-item']);
        $sub->divider();
        $sub->url('logout', 'Logout',['class'=>'dropdown-item']);
    });


});
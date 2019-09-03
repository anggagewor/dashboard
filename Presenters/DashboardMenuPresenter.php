<?php

namespace Modules\Dashboard\Presenters;

use Nwidart\Menus\Presenters\Presenter;

class DashboardMenuPresenter extends Presenter
{

    public function getOpenTagWrapper()
    {
        return '<ul class="list-unstyled">';
    }

    public function getCloseTagWrapper()
    {
        return '</ul>';
    }

    public function getMenuWithoutDropdownWrapper($item)
    {
        return '<li' . $this->getActiveState($item) . '>
			<a href="' . $item->getUrl() . '" ' . $item->getAttributes() . '>'
        . $item->getIcon() . ' ' . $item->title . '</a></li>' . PHP_EOL;
    }

    public function getActiveState($item, $state = ' class="active"')
    {
        return $item->isActive() ? $state : null;
    }


    public function getActiveStateOnChild($item, $state = 'active')
    {
        return $item->hasActiveOnChild() ? $state : null;
    }

    public function getDividerWrapper()
    {
        return '<li class="divider"></li>';
    }

    public function getHeaderWrapper($item)
    {
        return '<li class="dropdown-header">' . $item->title . '</li>';
    }

    public function getMenuWithDropDownWrapper($item)
    {
        $id = str_random();

        return '
		<li class="' . $this->getActiveStateOnChild($item) . ' panel panel-default" id="dropdown">
			<a data-toggle="collapse" href="#' . $id . '">
				' . $item->getIcon() . ' ' . $item->title . ' <span class="caret"></span>
			</a>
			<div id="' . $id . '" class="panel-collapse collapse ' . $this->getActiveStateOnChild($item, 'in') . '">
				<div class="panel-body">
					<ul class="nav navbar-nav">
						' . $this->getChildMenuItems($item) . '
					</ul>
				</div>
			</div>
		</li>
		' . PHP_EOL;
    }

    public function getMultiLevelDropdownWrapper($item)
    {
        return $this->getMenuWithDropDownWrapper($item);
    }
}

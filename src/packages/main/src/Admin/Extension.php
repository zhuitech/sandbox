<?php

namespace ZhuiTech\App\Main\Admin;

class Extension extends \ZhuiTech\BootAdmin\Admin\Extension
{
	protected $name = 'main';

	public $menu =
		[
			'title' => '系统',
			'icon' => 'fa-cogs',
			'uri' => '/',
			'children' => [
				[
                    'title' => '实用工具',
                    'icon' => 'fa-wrench',
					'children' => [
                        [
                        ],
					],
				],
			],
		];
}

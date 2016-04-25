<?php

namespace Wame\ArticleCategoryPlugin\Vendor\Wame\MenuModule\Components\MenuControl;

use Wame\MenuModule\Models\Item;

class CategoryMenuItem
{	
	public $name = 'category';

    /** @var \Nette\Application\LinkGenerator */
	private $linkGenerator;
	
	public function __construct($linkGenerator)
	{
		$this->linkGenerator = $linkGenerator;
	}
    
	public function addItem()
	{
		
	}
	
	private function categoriesDefault()
	{
		
	}

}
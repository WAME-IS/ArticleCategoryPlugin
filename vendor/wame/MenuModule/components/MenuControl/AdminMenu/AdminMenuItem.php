<?php

namespace Wame\ArticleCategoryPlugin\Vendor\Wame\MenuModule\Components\MenuControl\AdminMenu;

use Wame\MenuModule\Models\Item;

class AdminMenuItem
{	
    /** @var \Nette\Application\LinkGenerator */
	private $linkGenerator;
	
	public function __construct($linkGenerator)
	{
		$this->linkGenerator = $linkGenerator;
	}
    
	public function addItem()
	{
		$item = new Item();
		$item->setName('article');
		
		$item->addNode($this->categoriesDefault(), 'categories');
		
		return $item->getItem();
	}
	
	private function categoriesDefault()
	{
		$item = new Item();
		$item->setName('article-categories');
		$item->setTitle(_('Categories'));
		$item->setLink($this->linkGenerator->link('Admin:Category:', ['id' => null, 'type' => 'articles']));
		
		return $item->getItem();
	}

}
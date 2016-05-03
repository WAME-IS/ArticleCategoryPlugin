<?php

namespace Wame\ArticleCategoryPlugin\Vendor\Wame\MenuModule\Components\MenuControl\AdminMenu;

use Nette\Application\LinkGenerator;
use Wame\MenuModule\Models\Item;

interface IAdminMenuItem
{
	/** @return AdminMenuItem */
	public function create();
}


class AdminMenuItem implements \Wame\MenuModule\Models\IMenuItem
{	
    /** @var LinkGenerator */
	private $linkGenerator;
	
	
	public function __construct(
		LinkGenerator $linkGenerator
	) {
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
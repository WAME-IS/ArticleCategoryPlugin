<?php

namespace Wame\ArticleCategoryPlugin\Controls;

class ArticlesOfCategory extends BaseControl
{
	public function __construct() {
		parent::__construct();
	}
	
	public function render($categoryId = null)
	{
		$this->setTemplate('articles_of_category');
		
		$items = $this->categoryItemRepository->getItems('articles', $categoryId);
		
		$this->template->categoryId = $categoryId;
		$this->template->items = $items;
		$this->template->render();
	}
}
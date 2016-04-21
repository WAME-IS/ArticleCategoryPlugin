<?php

namespace App\ArticleCategoryModule\Presenters;

use Wame\ArticleCategoryPlugin\Controls\CategoriesOfArticle;
use Wame\CategoryModule\Controls\CategoryTreeMenu;

class CategoryPresenter extends \App\Core\Presenters\BasePresenter
{
	/** @var CategoriesOfArticle @inject */
	public $categoriesOfArticle;
	
	/** @var CategoryTreeMenu @inject */
	public $categoryTreeMenu;
	
	public $items = [];
	
	public $id;
	
	
	public function actionShow($id)
	{
		$this->id = $id;
	}
	
	public function renderShow()
	{
		$this->template->articleId = $this->id;
	}
	
	public function createComponentCategoriesOfArticle()
	{
		$this->categoriesOfArticle->setId(3);
		return $this->categoriesOfArticle;
	}
	
	public function createComponentCategoryTreeMenu()
	{
		return $this->categoryTreeMenu;
	}
	
}
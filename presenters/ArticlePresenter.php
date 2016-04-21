<?php

namespace App\ArticleCategoryModule\Presenters;

use Wame\ArticleCategoryPlugin\Controls\ArticlesOfCategory;

class ArticlePresenter extends \App\Core\Presenters\BasePresenter
{
	/** @var ArticlesOfCategory @inject */
	public $articlesOfCategory;
	
	public $items = [];
	
	public $id;
	
	
	public function actionShow($id)
	{
		$this->id = $id;
	}
	
	public function renderShow()
	{
		$this->template->categoryId = $this->id;
		$this->template->items = $this->items;
	}
	
	public function createComponentArticlesOfCategory()
	{
		return $this->articlesOfCategory;
	}
	
}
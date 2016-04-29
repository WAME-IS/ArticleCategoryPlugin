<?php

namespace Wame\ArticleCategoryPlugin\Controls;

class CategoriesOfArticle extends BaseControl
{
	public function __construct() {
		parent::__construct();
	}
	
	public function render($articleId = null)
	{
		$this->setTemplate('categories_of_article');
		
		$categories = $this->categoryItemRepository->getCategories('articles', $articleId?:$this->id);
		
		$this->template->articleId = $articleId;
		$this->template->categories = $categories;
		$this->template->render();
	}
}
<?php

namespace Wame\ArticleCategoryPlugin\Controls;

class CategoriesOfArticle extends BaseControl
{
	private $id;
	
	public function __construct() {
		parent::__construct();
	}
	
	public function setId($id)
	{
		$this->id = $id;
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
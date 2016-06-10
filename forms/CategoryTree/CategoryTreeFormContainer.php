<?php

namespace Wame\ArticleCategoryPlugin\Forms;

use Wame\DynamicObject\Forms\BaseFormContainer;
use Wame\CategoryModule\Repositories\CategoryRepository;
use Wame\CategoryModule\Repositories\CategoryItemRepository;

interface ICategoryTreeFormContainerFactory
{
	/** @return CategoryTreeFormContainer */
	public function create();
}

class CategoryTreeFormContainer extends \Wame\CategoryModule\Forms\CategoryTreeFormContainer
{
	public function __construct(CategoryRepository $categoryRepository, CategoryItemRepository $categoryItemRepository, \Wame\Utils\HttpRequest $httpRequest) {
		parent::__construct($categoryRepository, $categoryItemRepository, $httpRequest);
		
		$this->type = 'article';
	}
	
}
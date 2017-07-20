<?php

namespace Wame\ArticleCategoryPlugin\Vendor\Wame\AdminModule\Forms;

use Wame\CategoryModule\Repositories\CategoryRepository;
use Wame\CategoryModule\Repositories\CategoryItemRepository;
use Wame\Utils\HttpRequest;


interface ICategoryTreeFormContainerFactory
{
	/** @return CategoryTreeFormContainer */
	public function create();
}


class CategoryTreeFormContainer extends \Wame\CategoryModule\Forms\CategoryTreeFormContainer
{
    const TYPE = 'article';
    
    
	public function __construct(
        CategoryRepository $categoryRepository, 
        CategoryItemRepository $categoryItemRepository, 
        HttpRequest $httpRequest
    ) {
		parent::__construct($categoryRepository, $categoryItemRepository, $httpRequest);
		
		$this->type = self::TYPE;
	}
	
}
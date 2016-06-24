<?php

namespace Wame\ArticleCategoryPlugin\Wame\ArticleModule\Wame\AdminModule\Forms;

use Wame\DynamicObject\Forms\BaseFormContainer;
use Wame\CategoryModule\Repositories\CategoryRepository;


interface ICategoryTreeFormContainerFactory
{
	/** @return CategoryTreeFormContainer */
	public function create();
	
}


class CategoryTreeFormContainer extends BaseFormContainer
{
	protected $categoryRepository;


	public function __construct(CategoryRepository $categoryRepository) 
	{
		parent::__construct();
		
		$this->categoryRepository = $categoryRepository;
	}


    public function configure() 
	{
		$form = $this->getForm();
		
		$form->addGroup(_('Category'));
		
		$form->addCategoryPicker('categories', _('Categories'))
				->setRepository($this->categoryRepository);
    }

}
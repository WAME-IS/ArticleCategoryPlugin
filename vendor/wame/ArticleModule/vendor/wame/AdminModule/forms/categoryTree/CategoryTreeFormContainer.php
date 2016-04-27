<?php

namespace Wame\ArticleCategoryPlugin\Wame\ArticleModule\Wame\AdminModule\Forms;

use Nette\Application\UI\Form;
use Wame\DynamicObject\Forms\BaseFormContainer;
use Wame\CategoryModule\Repositories\CategoryRepository;

class CategoryTreeFormContainer extends BaseFormContainer
{
	protected $categoryRepository;
	
	public function __construct(CategoryRepository $categoryRepository) 
	{
		parent::__construct();
		
		$this->categoryRepository = $categoryRepository;
	}
	
    public function render() 
	{
        $this->template->_form = $this->getForm();
        $this->template->render(__DIR__ . '/default.latte');
    }

    public function configure() 
	{
		$form = $this->getForm();
		
		$form->addGroup(_('Category'));
		
		$form->addCategoryPicker('categories', _('Categories'))
				->setRepository($this->categoryRepository);
    }
	
}
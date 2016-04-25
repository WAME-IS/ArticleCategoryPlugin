<?php

namespace Wame\ArticleModule\Forms;

use Nette\Application\UI\Form;
use Wame\DynamicObject\Forms\BaseFormContainer;

class CategoryTreeFormContainer extends BaseFormContainer
{
    public function render() 
	{
        $this->template->_form = $this->getForm();
        $this->template->render();
    }

    public function configure() 
	{
		$form = $this->getForm();
		
		$form->addGroup(_('Category'));
		
		$form->addCategoryPicker('categories', _('Categories'))
				->setRepository($this->categoryRepository);
    }
	
}
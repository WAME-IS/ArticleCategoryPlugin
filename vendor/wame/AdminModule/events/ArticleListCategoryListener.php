<?php

namespace Wame\ArticleCategoryPlugin\Vendor\Wame\AdminModule\Events;

use Nette\Object;
use Wame\ArticleModule\Repositories\ArticleRepository;
use Wame\CategoryModule\Repositories\CategoryRepository;
use Wame\ComponentModule\Repositories\ComponentRepository;

class ArticleListCategoryListener extends Object 
{
    /** @var ArticleRepository */
	private $articleRepository;
    
    /** @var CategoryRepository */
	private $categoryRepository;
    
    /** @var ComponentRepository */
	private $componentRepository;
    
	
	public function __construct(
        ArticleRepository $articleRepository, 
        CategoryRepository $categoryRepository, 
        ComponentRepository $componentRepository
    ) {
		$this->articleRepository = $articleRepository;
		$this->categoryRepository = $categoryRepository;
		$this->componentRepository = $componentRepository;
		
		$componentRepository->onCreate[] = [$this, 'onCreate'];
		$componentRepository->onUpdate[] = [$this, 'onUpdate'];
//		$componentRepository->onDelete[] = [$this, 'onDelete'];
	}

	public function onCreate($form, $values, $componentEntity) 
	{
		$values['categories'] = $form->getHttpData($form::DATA_TEXT, 'categories');
        
        if(isset($values['categories'])) {
            $componentEntity->setParameters($this->getParams($values, $componentEntity->getParameters()));
        }
	}
	
	public function onUpdate($form, $values, $componentEntity)
	{
        $values['categories'] = $form->getHttpData($form::DATA_TEXT, 'categories');
        
        if(isset($values['categories'])) {
            $componentEntity->setParameters($this->getParams($values, $componentEntity->getParameters()));
        }
	}
	
	public function onDelete()
	{
		
	}
    
    
    /**
	 * Get parameters
	 * 
	 * @param array $values
	 * @param array $parameters
	 * @return array
	 */
	private function getParams($values, $parameters = [])
	{
		$array = [
			'categories' => explode(',', $values['categories'])
		];
		
		return array_replace($parameters, $array);
	}

}
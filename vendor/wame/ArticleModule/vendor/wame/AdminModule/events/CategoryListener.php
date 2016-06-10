<?php

namespace Wame\ArticleCategoryPlugin\Wame\ArticleModule\Wame\AdminModule\Events;

use Nette\Object;
use Wame\ArticleModule\Repositories\ArticleRepository;
use Wame\CategoryModule\Repositories\CategoryRepository;

class CategoryListener extends Object 
{
	const TAG = 'CategoryListener';

	private $articleRepository;
	private $categoryRepository;
	
	public function __construct(ArticleRepository $articleRepository, CategoryRepository $categoryRepository)
	{
		$this->articleRepository = $articleRepository;
		$this->categoryRepository = $categoryRepository;
		
		$articleRepository->onCreate[] = [$this, 'onCreate'];
		$articleRepository->onUpdate[] = [$this, 'onUpdate'];
//		$categoryRepository->onDelete[] = [$this, 'onDelete'];
	}

	public function onCreate($form, $values, $entity) 
	{
		$values['categories'] = $form->getHttpData($form::DATA_TEXT, 'categories[]');
		
		$this->categoryRepository->attachAll($entity, $values->categories);
	}
	
	public function onUpdate($form, $values, $articleEntity)
	{
		$values['categories'] = $form->getHttpData($form::DATA_TEXT, 'categories');
		
		$this->categoryRepository->sync($articleEntity, explode(",", $values->categories));
	}
	
	public function onDelete()
	{
		
	}

}
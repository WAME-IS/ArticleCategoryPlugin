<?php

namespace Wame\ArticleCategoryPlugin\Controls;

use Nette\Application\UI\Control;

use Wame\ArticleCategoryPlugin\Repositories\ArticleCategoryRepository;
use Wame\CategoryModule\Repositories\CategoryItemRepository;

class BaseControl extends Control
{
	/** @var CategoryItemRepository @inject */
	public $categoryItemRepository;
	
	/** @var ArticleCategoryRepository @inject */
	public $articleCategoryRepository;
	
	protected $items;
	
	protected $lang;
	
	public function injectRepository(ArticleCategoryRepository $articleCategoryRepository, CategoryItemRepository $categoryItemRepository)
	{
		$this->articleCategoryRepository = $articleCategoryRepository;
		$this->categoryItemRepository = $categoryItemRepository;
		$this->lang = $this->categoryItemRepository->lang;
	}
	
	public function setTemplate($templateName)
	{
		$this->template->setFile(__DIR__ . '/templates/' . $templateName . '.latte');
		$this->template->lang = $this->lang;
	}
	
}
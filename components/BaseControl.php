<?php

namespace Wame\ArticleCategoryPlugin\Controls;

use Nette\Application\UI\Control;

use Wame\CategoryModule\Repositories\CategoryItemRepository;

class BaseControl extends Control
{
	/** @var CategoryItemRepository @inject */
	public $categoryItemRepository;
	
	protected $items;
	
	protected $lang;
	
	public function injectRepository(CategoryItemRepository $categoryItemRepository)
	{
		$this->categoryItemRepository = $categoryItemRepository;
		$this->lang = $this->categoryItemRepository->lang;
	}
	
	public function setTemplate($templateName)
	{
		$this->template->setFile(__DIR__ . '/templates/' . $templateName . '.latte');
		$this->template->lang = $this->lang;
	}
	
}
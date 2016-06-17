<?php

namespace Wame\ArticleCategoryPlugin\Models\Category\Types;

class ArticleCategoryType extends \Wame\CategoryModule\Models\Type\CategoryType
{
	
	public function getAlias() {
		return 'article';
	}
	
	public function getName() {
		return 'Article';
	}
	
	public function getClassName() {
		return \Wame\ArticleModule\Entities\ArticleEntity::class;
	}
	
}
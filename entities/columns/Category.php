<?php

namespace Wame\ArticleCategoryPlugin\Entities\Columns;

use Wame\CategoryModule\Entities\CategoryEntity;
use Doctrine\ORM\Mapping as ORM;

trait Category
{
    /**
     * @ORM\ManyToMany(targetEntity="Wame\CategoryModule\Entities\CategoryEntity", inversedBy="articles")
     * @ORM\JoinTable(name="wame_article_category")
     */
	protected $categories;

    
    public function addCategory(CategoryEntity $category)
    {
        $category->addArticle($this);
        $this->categories[] = $category;
    }
	
}
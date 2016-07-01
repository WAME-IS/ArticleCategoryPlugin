<?php

namespace Wame\ArticleCategoryPlugin\Entities\Columns;

use Wame\ArticleModule\Entities\ArticleEntity;
use Doctrine\ORM\Mapping as ORM;

trait Article
{
    /**
     * @ORM\ManyToMany(targetEntity="Wame\ArticleModule\Entities\ArticleEntity", mappedBy="categories")
     */
	protected $articles;

	
    public function addArticle(ArticleEntity $article)
    {
        $this->articles[] = $article;
    }
    
}
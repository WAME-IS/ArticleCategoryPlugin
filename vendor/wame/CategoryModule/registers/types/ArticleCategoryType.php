<?php

namespace Wame\ArticleCategoryPlugin\Vendor\Wame\CategoryModule\Registers\Types;

use Wame\EntityModifier\Model\EntityModifier;
use Wame\EntityModifier\Model\FieldDefinition;

class ArticleCategoryType extends \Wame\CategoryModule\Registers\Types\CategoryType
{
	public function __construct(EntityModifier $entityModifier)
    {
//        $entityModifier->getEntityBuilder($this->getClassName())->addTrait("Wame\ArticleCategoryPlugin\Entities\Columns\Category");
//        $entityModifier->getEntityBuilder(\Wame\CategoryModule\Entities\CategoryEntity::class)->addTrait("Wame\ArticleCategoryPlugin\Entities\Columns\Article");
        
//        $entityModifier->getEntityBuilder($this->getClassName())->addField(new FieldDefinition('categories', [
//            '@Doctrine\ORM\Mapping\ManyToMany(targetEntity="Wame\CategoryModule\Entities\CategoryEntity")'
//        ]));
    }
    
    
	public function getAlias()
    {
		return 'article';
	}
	
	public function getName()
    {
		return 'Article';
	}
	
	public function getClassName()
    {
		return \Wame\ArticleModule\Entities\ArticleEntity::class;
	}
	
}
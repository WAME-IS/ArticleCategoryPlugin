<?php

namespace Wame\ArticleCategoryPlugin\Entities;

use \Wame\Core\Entities\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="wame_category_item")
 * @ORM\Entity
 */
class ArticleCategoryEntity extends BaseEntity 
{
	use \Wame\Core\Entities\Columns\Identifier;

	/**
	 * @ORM\Column(name="type", type="string", length=250, nullable=false)
	 */
	protected $type;
	
	/**
	 * @ORM\Column(name="category_id", type="integer", length=10, nullable=false)
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
	 */
	protected $category_id;
	
	/**
     * @ManyToMany(targetEntity="Wame\ArticleModule\Entities\ArticleEntity")
     * @JoinTable(name="wame_category_item",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="phonenumber_id", referencedColumnName="id", unique=true)}
     *      )
     */
	
	/** 
	 * @ORM\OneToMany(targetEntity="Wame\ArticleModule\Entities\ArticleEntity", mappedBy="articlecategory") 
	 * @ORM\JoinColumn(name="item_id", referencedColumnName="id")
	 */
	protected $articles;

}
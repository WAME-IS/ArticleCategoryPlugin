<?php

namespace Wame\ArticleCategoryPlugin\Repositories;

//use Wame\ArticleCategoryPlugin\Entities\ArticleCategoryEntity;
use Wame\ArticleModule\Entities\ArticleEntity;
use Wame\ArticleModule\Entities\ArticleLangEntity;
use Wame\CategoryModule\Entities\CategoryEntity;
use Wame\CategoryModule\Entities\CategoryLangEntity;
use Wame\UserModule\Entities\UserEntity;

class ArticleCategoryRepository extends \Wame\Core\Repositories\BaseRepository
{
	
//	/** @var ArticleCategoryEntity */
//	private $articleCategoryEntity;
	
//	/** @var ArticleEntity */
//	private $articleEntity;
//	
//	/** @var CategoryEntity */
//	private $categoryEntity;
	
	/** @var UserEntity */
	private $userEntity;
	
	public function __construct(
		\Nette\DI\Container $container, 
		\Kdyby\Doctrine\EntityManager $entityManager, 
		\h4kuna\Gettext\GettextSetup $translator, 
		\Nette\Security\User $user
	) {
		parent::__construct($container, $entityManager, $translator, $user);
		
//		$this->articleCategoryEntity = $this->entityManager->getRepository(ArticleCategoryEntity::class);
//		$this->articleEntity = $this->entityManager->getRepository(ArticleEntity::class);
//		$this->categoryEntity = $this->entityManager->getRepository(CategoryEntity::class);
		$this->userEntity = $this->entityManager->getRepository(UserEntity::class)->findOneBy(['id' => $user->id]);
	}
	
	public function getArticle($criteria = null)
	{
		$article = $this->articleCategoryEntity->findOneBy($criteria);
		return $article;
	}
	
	public function getArticles($criteria = null)
	{
//		$articleCategoryEntity = $this->articleCategoryEntity->findOneBy($criteria);
		
//		dump($articleCategoryEntity); exit;
		
//		return $articleCategoryEntity;
		
//		return $articleCategoryEntity->articles;
	}
	
	public function getCategories()
	{
		
	}
	
}
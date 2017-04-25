<?php
//soccupe de la home page et page contact
namespace Controller;

use \W\Controller\Controller;
use \Model\ArticleModel; // on aura besoin de la classe pour nos article

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$article_manager = new ArticleModel();    //la table article doit exister en base
    $articles = $article_manager->findAll(); // je recuper les donnés sous forme de tableau

		$this->show('default/home' , ['articles' => $articles  ]);
	}
	/**
	 *	Page de contact
	 */
	public function contact()
	{
		//include ici du fichier
		$this->show('default/contact');
	}

}

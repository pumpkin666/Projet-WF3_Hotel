<?php

namespace Controller;

use \W\Controller\Controller;

class ArticleController extends Controller
{
	public function articles()
	{
		$title = 'mon premier article';
		$name = array('Averell', 'Jack', 'Wiliam', 'Joe');
		$this->show('article/articles', array('my_title'=> $title, 'daltons' => $name) ); // Tableau associatif: clef => valeur
		
		
	}
}


?>
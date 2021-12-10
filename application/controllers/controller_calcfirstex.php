<?php

class Controller_Calcfirstex extends Controller
{

	function action_index()
	{	
		$this->view->generate('calcfirstex_view.php', 'template_view.php');
	}
}
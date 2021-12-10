<?php

class Controller_Classlab extends Controller
{

	function action_index()
	{	
		$this->view->generate('classlab_view.php', 'template_view.php');
	}
}
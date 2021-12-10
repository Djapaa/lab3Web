<?php

class Controller_myaccount extends Controller
{

	function action_index()
	{	
		$this->view->generate('myaccount_view.php', 'template_view.php');
	}
}
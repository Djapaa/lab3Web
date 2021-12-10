<?php

class Controller_Recover extends Controller
{

	function action_index()
	{	
		$this->view->generate('recover_view.php', 'template_view.php');
	}
}
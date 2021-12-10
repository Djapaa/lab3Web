<?php

class Controller_Newpass extends Controller
{

	function action_index()
	{	
		$this->view->generate('newpass_view.php', 'template_view.php');
	}
}
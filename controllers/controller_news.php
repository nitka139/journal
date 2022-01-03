<?php

class Controller_News extends Controller
	{
		function _construct()
		{
			$this->model = new Model_News();
			
			$this->view = new View();
		}

		function action_index()
		{

			$data = $this->model->get_data();
			
			$this->view->generate('news_view.php', 'template_view.php', $data);
		}
	}
?>
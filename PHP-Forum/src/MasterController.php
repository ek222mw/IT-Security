<?php
	require_once("common/HTMLView.php");
	require_once("LoginController.php");
	require_once("LoginModel.php");
	require_once("LoginView.php");
	
	
	class NavigationController{
		private $model;
		private $view;
			
		public function __construct(){
			
						
			// Skapar nya instanser av modell- & vy-klassen och l�gger dessa i privata variabler.
			$this->model = new LoginModel();
			$this->view = new LoginView($this->model);
			
			
			//V�ljer vilken controller som ska anv�ndas beroende p� indata, t.ex. knappar och l�nkar.
			if(!$this->view->didUserPressLogin())
			{
				$loginC = new LoginController();
				$htmlBodyLogin = $loginC->doHTMLBody();
			}

			else{
				$loginControl = new LoginController();
				$htmlBodyLogin = $loginControl->doHTMLBody();
			}
			
			
			
		}
	}
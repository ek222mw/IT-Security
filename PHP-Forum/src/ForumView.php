<?php
require_once 'common/HTMLView.php';
	class ForumView extends HTMLView
	{
		private $model;
		public function __construct(LoginModel $model)
		{
			$this->model = $model;
		}
		
		public function didUserPressCreateNewTopic()
		{
			return isset($_GET['create']);
		}
		
		public function didUserPressTopic()
		{
			return isset($_GET['topics']);
		}
		
		public function showTopics(){
				$HTMLbody = "
					
					<br><a href='?create'>Create new topic</a>
					
					<h2>Forum</h2>
					<p>Forum topic 1</p>
					<p>Forum topic 2</p>
					<p>Forum topic 3</p>
					
					<p><a href='?logout'>Logga ut</a></p>
				
				";
				
				$this->echoHTML($HTMLbody);
		}
		
		//Visar en hel forumtråd
		public function ShowForumPost($topicID){
			
				$HTMLbody = "
					
				<form method=post >
						<fieldset>
							testar $topicID
						</fieldset>
					</form>
				
				";
			
			$this->echoHTML($HTMLbody);
		}
		
		
		//Visa skapa nytt ämne formulär
		public function showNewTopicForm(){

				$HTMLbody = "
				<form method=post >
						<fieldset>
							<legend>Create a new topic</legend>
							Topic name: <br>
							<input type='text' name='topicName'><br>
							<textarea type='text' name='topicText'></textarea><br>
						
							Skicka: <input type='submit' name='sendNewTopic'  value='Send'>
						</fieldset>
					</form>
				
				";
			
			$this->echoHTML($HTMLbody);
		}
		
		//Redigera sin egen post
		public function EditTopicForm(){

				$HTMLbody = "
				<form method=post >
						<fieldset>
							<legend>Edit topic</legend>
							Topic name: <br>
							<input type='text' name='topicName'><br>
							<textarea type='text' name='editTopicText'></textarea><br>
						
							Skicka: <input type='submit' name='sendEditTopic'  value='Send'>
						</fieldset>
					</form>
				
				";
			
			$this->echoHTML($HTMLbody);
		}
		
		//Svara i en forumtråd
		public function PostTopicComment(){
			
				$HTMLbody = "
				
				";
			
			$this->echoHTML($HTMLbody);
		}
		
		//Svara på en post i en forumtråd
		public function PostTopicReply(){
			
				$HTMLbody = "
				
				";
			
			$this->echoHTML($HTMLbody);
		}
	}
?>
<?php

class Post
{
	private $error="";
	public function create_post($data)
	{
		if(!empty($data['post']))
		{
			$post = $addsLashes['post']);
			$postid = $this->create_postid();
			$query = "insert into posts (postid,post) values ($postid,'$post')";
			
			$DB = new Database();
			$DB->save($query);
		}else
		{
			$this->error = "You can't make an empty post!<br>";
			
		}
		
		return $this->error;
	}
	private function create_postid()
	{
		$length = rand(4,19);
		$number = "";
		for ($i=0; $i < $length; $i++){
			$new_rand=rand(0,9);
				
			$number = $number . $new_rand;
			
		}
		
		return $number;
	}
}
<?php
require 'functions.php';
class Task{
	protected $description=12;
	protected $completed=true;

	public function __construct()
	{
	 return $this->description;

	}
	public function complete()
	{
		$this->completed=true;
	}
	public function isComplete()
	{
		return $this->completed;
	}
	}
	//$task=new Task('Go to the store');
	var_dump($task->isComplete());
	var_dump($task->__construct());
?>
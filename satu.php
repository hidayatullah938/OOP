<?php
class komputer
{
	public $prosesor;
	public $memory;

	public function __construct($prosesor,$memory = "12GB")
	
	{
		$this->prosesor = $prosesor;
		$this->memory = $memory;
	}
}

$komputersaya = new komputer ("Core i7","8GB");
echo $komputersaya->prosesor;
echo " | ";
echo $komputersaya->memory;
?>
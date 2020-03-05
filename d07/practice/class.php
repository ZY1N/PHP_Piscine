#!/usr/bin/php
<?php
class example {
	public $publicfoo = 0;
	private $privatefoo = "hello";
	function __construct() {
		print('constructor called'. PHP_EOL);
		//print($this->foo."\n");
		return ;
	}

	function __destruct() {
		print('Destructor called'. PHP_EOL);
		return ;
	}

	function bar() {
		print('method bar called'.PHP_EOL);
		return ;
	}
}

$instance = new example();

// echo $instance->foo;
// $instance->foo = 42;
// echo $instance->foo;
// $instance->bar();
?>

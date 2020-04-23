<?php namespace Talifhani\PHPDataStructures\LinkedList;

class Node
{
	public $value = NULL;
	public $nextNode = NULL;

	/**
	 * Node constructor.
	 * @param $value
	 */
	public function __construct($value)
	{
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->value;
	}
}
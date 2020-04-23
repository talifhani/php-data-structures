<?php namespace Talifhani\PHPDataStructures\LinkedList;

class Node
{
	public $value = NULL;
	public $nextNode = NULL;

	public function __construct($value)
	{
		$this->value = $value;
    }

    public function __toString()
    {
        return (string) $this->value;
    }
}
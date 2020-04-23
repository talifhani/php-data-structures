<?php namespace Talifhani\PHPDataStructures\LinkedList;

use Talifhani\PHPDataStructures\IndexOutOfBoundsException;

class LinkedList implements ILinkedList
{
	/** @var Node The head element of the list */
	private $head = NULL;

	/**
	 * Add value at the beginning of the list
	 *
	 * @param $value
	 */
	public function prepend($value): void
	{
		$newNode = new Node($value);

		if ($this->head != null){
			$newNode->nextNode = $this->head;
        }
        $this->head = $newNode;
	}

	/**
	 * Adds value at the end of the list
	 *
	 * @param $value
	 */
    public function append($value): void
    {
        $lastNode = $this->peekLast();

        if ($lastNode != NULL)
        {
            $newNode = new Node($value);
            $lastNode->nextNode = $newNode;
        }
    }

	/**
	 * @param $value
	 * @param $index
	 */
	public function insert($value, $index): void
	{

	}

	/**
	 * Clears the list, removes all the elements
	 */
    public function clear(): void
    {
    	$this->head = NULL;
    }

	/**
	 * @param $index
	 * @return mixed|null
	 */
    public function peekAtIndex($index)
    {
        if ($this->head == null OR $index < 0)
            return null;

        $node = $this->head;
        $i = 0;
        while ($i != $index){
            $node = $node->nextNode;
            $i++;
        }

        return $node;
    }

	/**
	 * @param int $index
	 */
    public function deleteByIndex(int $index)
    {
        /** @todo this can be optimized to not loop through twice with peekAtIndex() */
        $nodeBefore = $this->peekAtIndex($index - 1);
        $nodeToDelete = $this->peekAtIndex($index);

        if ($nodeToDelete != null)
        {
            if ($nodeBefore != null)
                $nodeBefore->nextNode = $nodeToDelete->nextNode;
            else // head
                $this->head = $nodeToDelete->nextNode;
        }
    }

	/**
	 * @return Node|null
	 */
    public function getFirst(): Node
    {
    	if ($this->head == null)
    		return null;

    	$nextNode = $this->head->nextNode;

	    $this->head = $nextNode;

	    return $this->head;
    }

	/**
	 * @return Node|null
	 */
    public function peekLast(): Node
    {
		if ($this->head == NULL)
			return NULL;

        $node = $this->head;

		while ($node->nextNode != null){
            $node = $node->nextNode;
        }
        
        return $node;
    }

    public function get($index)
    {
        $nodeBefore = $this->peekAtIndex($index - 1);
        $nodeToGet = $this->peekAtIndex($index);

        if ($nodeBefore != null)
            $nodeBefore->nextNode = $nodeToGet->nextNode;
    }

	/**
	 * @param $value
	 * @return int|null
	 */
    public function indexOf($value)
    {
        if ($this->head == null)
            return null;
        
        $node = $this->head;
        if ($node->value == $value)
            return 0;

        $i = 0;
        while ($node = $node->nextNode){
            $i++;
            if ($value == $node->value)
                return $i;

        }

        return null;
    }

	/**
	 * @return int
	 */
	public function size(): int {
        if ($this->head == null)
            return 0;

        $node = $this->head;
        $i = 1;
        while ($node = $node->nextNode){
            $i++;
        }

        return $i;
    }

	/**
	 * @param $index
	 */
	public function getByIndex($index){}

	/**
	 * @return string
	 */
	public function __toString()
	{
		if ($this->head == null)
			return '';

        $node = $this->head;
        $string[] = $node->value;

		while ($node->nextNode != null){
            $node = $node->nextNode;
            $string[] = $node->value;
		}

		return implode('-', $string);
	}
}
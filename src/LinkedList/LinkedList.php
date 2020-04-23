<?php namespace Talifhani\PHPDataStructures\LinkedList;

use Talifhani\PHPDataStructures\IndexOutOfBoundsException;

class LinkedList implements ILinkedList
{
	/** @var mixed The head element of the list */
	private $head = NULL;

	public function prepend($value): void
	{
		$newNode = new Node($value);

		if ($this->head != null){
			$newNode->nextNode = $this->head;
        }
        $this->head = $newNode;
	}

    public function append($value): void
    {
        $lastNode = $this->peekLast();

        if ($lastNode != NULL)
        {
            $newNode = new Node($value);
            $lastNode->nextNode = $newNode;
        }
    }
	public function insert($value, $index): void{}
    public function clear(): void{}
    public function peekAtIndex($index)
    {
        if ($this->head == null OR $index < 0)
            return NULL;

        $node = $this->head;
        $i = 0;
        while ($i != $index){
            $node = $node->nextNode;
            $i++;
        }

        return $node;
    }
    public function deleteByIndex($index)
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

    public function getFirst()
    {
        return $this->head;
    }

    public function peekLast()
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

    public function indexOf($value)
    {
        if ($this->head == null)
            return NULL;
        
        $node = $this->head;
        if ($node->value == $value)
            return 0;

        $i = 0;
        while ($node = $node->nextNode){
            $i++;
            if ($value == $node->value)
                return $i;

        }

        return NULL;
    }

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
	public function getByIndex($index){}

	public function __toString()
	{
		if ($this->head == NULL)
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
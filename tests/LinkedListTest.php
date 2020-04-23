<?php namespace Talifhani\PHPDataStructures\Test;

use PHPUnit\Framework\TestCase;
use Talifhani\PHPDataStructures\LinkedList\LinkedList;

class LinkedListTest extends TestCase
{
	public function testLinkedList()
	{
		$linkedList = new LinkedList();

		$linkedList->prepend(1);
		$linkedList->prepend(2);
		$linkedList->prepend(3);
		$linkedList->append(4);
		$linkedList->deleteByIndex(3);

		$this->assertEquals((string) $linkedList, '3-2-1');
		$this->assertEquals($linkedList->size(), 3);
		$this->assertEquals($linkedList->indexOf(2), 1);
	}
}
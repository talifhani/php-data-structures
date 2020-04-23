<?php namespace Talifhani\PHPDataStructures\Test;

use PHPUnit\Framework\TestCase;
use Talifhani\PHPDataStructures\LinkedList\Node;

class NodeTest extends TestCase
{
	public function testNodeCreation()
	{
		$node_a = new Node(2);

		$this->assertEquals($node_a->value, 2);
	}

	public function testNodeLinking()
	{
		$node_a = new Node(2);
		$node_b = new Node(7);

		$node_a->nextNode = $node_b;

		$this->assertEquals($node_a->nextNode->value, 7);
	}
}
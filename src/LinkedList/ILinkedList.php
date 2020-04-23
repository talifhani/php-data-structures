<?php namespace Talifhani\PHPDataStructures\LinkedList;

interface ILinkedList
{
	public function append($element): void;
	public function prepend($element): void;
	public function insert($element, $index): void;
	public function clear(): void;
	public function getFirst();
	public function peekLast();
	public function get($index);
	public function indexOf($element);
	public function size(): int;
	public function getByIndex($index);
}
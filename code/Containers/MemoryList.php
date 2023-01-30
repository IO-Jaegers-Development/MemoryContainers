<?php
	/**
	 *
	 */
	namespace IOJaegers\MemoryContainers\Containers;

	use \Iterator;
	
	
	/**
	 *
	 */
	abstract class MemoryList
		implements Iterator
	{
		/**
		 *
		 */
		public function __construct()
		{
		
		}
		
		/**
		 * @return void
		 */
		public function __deconstruct()
		{
		
		}
		
		
		// Iterator Interface
		/**
		 * @return mixed
		 */
		public abstract function current(): mixed;
		
		/**
		 * @return mixed
		 */
		public abstract function key(): mixed;
		
		/**
		 * @return void
		 */
		public abstract function next(): void;
		
		/**
		 * @return void
		 */
		public abstract function rewind(): void;
		
		/**
		 * @return bool
		 */
		public abstract function valid(): bool;
		
	}
?>
<?php
	namespace IOJaegers\MemoryContainers\Containers;
	
	use IOJaegers\MemoryContainers\Events\OnChange;
	
	/**
	 *
	 */
	class DynamicMemory
		extends MemoryList
			implements OnChange
	{
		/**
		 *
		 */
		public function __construct()
		{
			parent::__construct();
			
			$this->setMap(
				array()
			);
		}
		
		/**
		 * @return void
		 */
		public function __deconstruct()
		{
			parent::__deconstruct();
		}
		
		/**
		 * @param int $index
		 * @return mixed
		 */
		public function retrieveElementAtIndex(
			int $index
		): mixed
		{
			return $this->getMap()[$index];
		}
		
		/**
		 * @return void
		 */
		public function onChange(): void
		{
			// TODO: Implement onChange() method.
		}
		
		public function hasChanged(): bool
		{
			// TODO: Implement hasChanged() method.
			return false;
		}
		
		// Variables
		private const zero = 0;
		
		private int $pointer = 0;
		
		private ?array $map = null;
		
		
		// Interfaces
		/**
		 * @return mixed
		 */
		public function current(): mixed
		{
			return $this->retrieveElementAtIndex(
				$this->getPointer()
			);
		}
		
		/**
		 * @return int
		 */
		public function key(): int
		{
			return $this->getPointer();
		}
		
		/**
		 * @return void
		 */
		public function next(): void
		{
			$this->setPointer(
				$this->getPointer() + 1
			);
		}
		
		/**
		 * @return void
		 */
		public function rewind(): void
		{
			$this->setPointer(
				self::zero
			);
		}
		
		/**
		 * @return bool
		 */
		public function valid(): bool
		{
			return $this->current() !== null;
		}
		
		/**
		 * @return int
		 */
		public function getPointer(): int
		{
			return $this->pointer;
		}
		
		/**
		 * @param int $pointer
		 */
		public function setPointer(
			int $pointer
		): void
		{
			$this->pointer = $pointer;
		}
		
		/**
		 * @return array|null
		 */
		public function getMap(): ?array
		{
			return $this->map;
		}
		
		/**
		 * @param array|null $map
		 */
		public function setMap(
			?array $map
		): void
		{
			$this->map = $map;
		}
	}
?>
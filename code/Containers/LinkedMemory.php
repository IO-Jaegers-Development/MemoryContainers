<?php
	namespace IOJaegers\MemoryContainers\Containers;
	
	use IOJaegers\MemoryContainers\Events\OnChange;
	use IOJaegers\MemoryContainers\Objects\LinkedItem;
	
	/**
	 *
	 */
	class LinkedMemory
		extends MemoryList
			implements OnChange
	{
		/**
		 *
		 */
		public function __construct()
		{
			parent::__construct();
			
			$this->setCacheMap(
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
		private ?array $cacheMap = null;
		
		private ?LinkedItem $begin = null;
		private ?LinkedItem $end = null;
		
		
		// Interfaces
		/**
		 * @return mixed
		 */
		public function current(): mixed
		{
			return null;
		}
		
		/**
		 * @return mixed
		 */
		public function key(): mixed
		{
			return null;
		}
		
		/**
		 * @return void
		 */
		public function next(): void
		{
		
		}
		
		/**
		 * @return void
		 */
		public function rewind(): void
		{
		
		}
		
		/**
		 * @return bool
		 */
		public function valid(): bool
		{
			return false;
		}
		
		//
		/**
		 * @return array|null
		 */
		public function getCacheMap(): ?array
		{
			return $this->cacheMap;
		}
		
		/**
		 * @param array|null $cacheMap
		 */
		public function setCacheMap(
			?array $cacheMap
		): void
		{
			$this->cacheMap = $cacheMap;
		}
		
		/**
		 * @return void
		 */
		public function deleteCache(): void
		{
			unset(
				$this->cacheMap
			);
		}
		
		/**
		 * @return LinkedItem|null
		 */
		public function getBegin(): ?LinkedItem
		{
			return $this->begin;
		}
		
		/**
		 * @return LinkedItem|null
		 */
		public function getEnd(): ?LinkedItem
		{
			return $this->end;
		}
		
		/**
		 * @param LinkedItem|null $begin
		 */
		public function setBegin(
			?LinkedItem $begin
		): void
		{
			$this->begin = $begin;
		}
		
		/**
		 * @param LinkedItem|null $end
		 */
		public function setEnd(
			?LinkedItem $end
		): void
		{
			$this->end = $end;
		}
		
		/**
		 * @return void
		 */
		public function cacheMap(): void
		{
		
		}
	}
?>
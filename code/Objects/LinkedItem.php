<?php
	/**
	 *
	 */
	namespace IOJaegers\MemoryContainers\Objects;
	
	
	/**
	 *
	 */
	class LinkedItem
	{
		// Constructors
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
	
		// Variables
		private ?LinkedItem $next = null;
		private ?LinkedItem $previous = null;
		
		// Accessors
		/**
		 * @return LinkedItem|null
		 */
		public function getNext(): ?LinkedItem
		{
			return $this->next;
		}
		
		/**
		 * @return LinkedItem|null
		 */
		public function getPrevious(): ?LinkedItem
		{
			return $this->previous;
		}
		
		/**
		 * @param LinkedItem|null $next
		 */
		public function setNext(
			?LinkedItem $next
		): void
		{
			$this->next = $next;
		}
		
		/**
		 * @param LinkedItem|null $previous
		 */
		public function setPrevious(
			?LinkedItem $previous
		): void
		{
			$this->previous = $previous;
		}
		
	}
?>
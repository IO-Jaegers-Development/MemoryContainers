<?php
	/**
	 *
	 */
	namespace IOJaegers\MemoryContainers\Events;
	
	
	/**
	 *
	 */
	interface OnChange
	{
		/**
		 * @return void
		 */
		public function onChange(): void;
		
		/**
		 * @return bool
		 */
		public function hasChanged(): bool;
	}
?>
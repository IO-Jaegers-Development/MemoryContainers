<?php
	namespace IOJaegers\MemoryContainers\Events;
	
	
	/**
	 *
	 */
	interface OnChange
	{
		public function onChange(): void;
		
		public function hasChanged(): bool;
	}
?>
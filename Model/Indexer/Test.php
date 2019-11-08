<?php
namespace BDC\SampleNews\Model\Indexer;

use \Magento\Framework\Indexer\ActionInterface;
use \Magento\Framework\Mview\ActionInterface;

class Test implements ActionInterface, ActionInterface {
	/*
	 * Used by mview, allows process indexer in the "Update on schedule" mode
	 */
	public function execute($ids){

		//code here!
	}

	/*
	 * Will take all of the data and reindex
	 * Will run when reindex via command line
	 */
	public function executeFull(){
		//code here!
	}


	/*
	 * Works with a set of entity changed (may be massaction)
	 */
	public function executeList(array $ids){
		//code here!
	}


	/*
	 * Works in runtime for a single entity using plugins
	 */
	public function executeRow($id){
		//code here!
	}
}

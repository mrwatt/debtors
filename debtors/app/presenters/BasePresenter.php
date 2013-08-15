<?php
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	public $previous;
	
	public $current;
	
	public function startup()
	{
		parent::startup();
		
		$this->previous = 'files/' . date('Ym', strtotime('-2 month')) . '.xls';
		$this->current = 'files/' . date('Ym', strtotime('-1 month')) . '.xls';
		
	}
}

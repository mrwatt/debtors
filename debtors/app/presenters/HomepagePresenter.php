<?php
class HomepagePresenter extends BasePresenter
{

	public function renderDefault($id)
	{
		$count = dibi::query('
			SELECT
				COUNT(id)
			FROM
				[debtors]');
		$count = $count->fetchSingle();
		
		$paginator = new Nette\Utils\Paginator;
		$paginator->setItemCount($count);
		$paginator->setItemsPerPage(50);
		$id = (empty($id)) ? 1 : $id;
		$paginator->setPage($id);
		
		$data = dibi::query('
			SELECT
				*
			FROM
				[debtors]
			LIMIT
				'. $paginator->getOffset() . ', ' . $paginator->getLength() . '
		');
		
		$rows = $data->fetchAll();
		
		$this->template->rows = $rows;
		$this->template->paginator = $paginator;
	}

}

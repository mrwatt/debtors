<?php
class ImportPresenter extends BasePresenter
{

	public function actionDefault()
	{
		if(file_exists($this->current)) {
			die('Data jsou aktualni');
		}else{
			
			if(file_exists($this->previous)) {
				unlink($this->previous);
			}
			
			$data = file_get_contents('http://www.vzp.cz/uploads/document/nad-1000000-1.xls');
			
			if($data) {
				file_put_contents($this->current, $data);
				unset($data);
			}
		}
		
		$data = array();
		
		$xls = new Spreadsheet_Excel_Reader_Extended($this->current, false);
		$sheet = $xls->xlstoarray();
		
		unset($sheet[1], $sheet[2], $sheet[3], $sheet[4]);
		
		function toInt($string)
		{
			return (int) str_replace(',', '', $string);
		}
		
		foreach($sheet as $row) {
		
			$org_id = $birthday = 0;
			list($org_id, $birthday) = explode('/', $row[3]);
			if(!empty($birthday)) {
				$birthday = date('Y-m-d', strtotime($birthday));
			}
			
			$data[] = array(
				'id' => null,
				'region_id' => $row[1],
				'region' => $row[2],
				'org_id' => $org_id,
				'birthday' => $birthday,
				'name' => $row[4],
				'address' => $row[5],
				'debt_premium' => toInt($row[6]),
				'debt_penalties' => toInt($row[7]),
				'debt_total' => toInt($row[8]),
				'month' => (int) date('n', strtotime('-1 month'))
			);
		}
		
		
		dibi::query('
			INSERT INTO
				[debtors]
			%ex', $data);
		
		die();
	}

}

<?php
include_once 'classes/PetShop.php';

class SiteController
{
	public $model;
	public $request;
	public $pets;

	public function __construct()
	{
		$this->model = new PetShop();
		$this->model->getDataFromFile();
	}

	public function invoke()
	{
		if((!isset($_GET['func'])) && (!isset($_GET['args']))) {
			include 'views/view.php';
		} else {
			if ($_GET['func'] == 'cats') {
				$result = $this->model->getByType('cat', $this->model->pets);
			} elseif (isset($_GET['args'])) {
				$result = $this->model->getWhiteOrFluffy($_GET['args'], $this->model->pets);
			} elseif ($_GET['func'] == 'avg') {
				$result = $this->model->getAvgPrice($this->model->pets);
				// _d($result);
			}
			include 'views/view.php';
		}
	}
}
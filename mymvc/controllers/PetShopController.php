<?php
include_once 'petshop/classes/PetShop.php';
include_once 'controllers/Controller.php';

class PetShopController extends Controller
{
	const VIEW = 'petshop.php';

	public $model;
	public $request;
	public $pets;

	public function __construct()
	{
		$this->model = new PetShop();
	}

	public function invoke()
	{
		$result = '';
		$this->model->getDataFromFile();
		if(!isset($_GET['func']) && !isset($_GET['args'])) {
			$this->render(self::VIEW, []);
		} else {
			if ($_GET['func'] == 'cats') {
				$result = $this->model->getByType('cat', $this->model->pets);
			} elseif (!empty($_GET['args'])) {
				if ($_GET['args'] == mb_strtolower('white') || $_GET['args'] == mb_strtolower('fluffy')) {
					$result = $this->model->getWhiteOrFluffy($_GET['args'], $this->model->pets);
				} elseif ($_GET['args'] != mb_strtolower('white') || $_GET['args'] != mb_strtolower('fluffy')) {
					$result = '<h1>Oops :(</h1><br/><h3>Invalid argument.</h3>';
				}
			} elseif ($_GET['func'] == 'avg') {
				$result = $this->model->getAvgPrice($this->model->pets);
			}
			$this->render(self::VIEW, $result);
		}
	}
}
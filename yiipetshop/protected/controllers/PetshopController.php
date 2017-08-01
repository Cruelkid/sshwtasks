<?php

    function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
    function _d($t){d($t);die;}

class PetshopController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionCats()
    {
        $cats = Yii::app()->db->createCommand('SELECT * FROM cats')->queryAll();
        $this->render('cats', ['cats' => $cats]);
	}

    public function actionWhite()
    {
        $pets = [];
        $pets[] = Yii::app()->db->createCommand('
            SELECT * FROM cats
            WHERE Color LIKE \'white\';
        ')->queryAll();
        $pets[] = Yii::app()->db->createCommand('
            SELECT * FROM dogs
            WHERE Color LIKE \'white\';
        ')->queryAll();
        $pets[] = Yii::app()->db->createCommand('
            SELECT * FROM hamsters
            WHERE Color LIKE \'white\';
        ')->queryAll();
        $this->render('white', ['result' => $pets]);
    }

    public function actionFluffy()
    {
        $pets = [];
        $pets[] = Yii::app()->db->createCommand('
            SELECT * FROM cats
            WHERE Fluff > 3;
        ')->queryAll();
        $pets[] = Yii::app()->db->createCommand('
            SELECT * FROM hamsters;
        ')->queryAll();
        $this->render('fluffy', ['result' => $pets]);
    }

    public function actionAvg()
    {
        $result = [];
        $result[] = Yii::app()->db->createCommand('
            SELECT Price From cats;
        ')->queryAll();
        $result[] = Yii::app()->db->createCommand('
            SELECT Price From dogs;
        ')->queryAll();
        $result[] = Yii::app()->db->createCommand('
            SELECT Price From hamsters;
        ')->queryAll();
        $tmp = [];
        foreach ($result as $arr) {
            foreach ($arr as $res) {
                foreach ($res as $price) {
                    $tmp[] = $price;
                }
            }
        }
        $result = $tmp;
        $avg = array_sum($result) / count($result);
        $this->render('avg', ['result' => $avg]);
    }
   	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
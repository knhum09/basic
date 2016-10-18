<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller{
    
    public function actionFirst() {
        $title='Hello Controller action first';
        
        return $this->render('first',['title'=>$title]);;
    }
}
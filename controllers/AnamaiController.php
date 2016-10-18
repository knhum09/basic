<?php

namespace app\controllers;

use yii\web\Controller;

class AnamaiController extends Controller{
    
    public function actionTest() {
        
        $title='Hello Anamai Controller action test';
        $a=3*5;
        
        return $this->render('test',['title'=>$title,'aaa'=>$a]);
    }
}
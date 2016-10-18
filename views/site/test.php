<?php
use yii\helpers\Html;

$this->title = 'test';
$this->params['breadcrumbs'][] = $this->title;

echo '<h1>'.$title.'</h1>';
echo '<hr>';
echo 'Data form Controller :: '.$cat;
echo '<hr>';
echo '<h1>แสดงผลแบบ Array</h1>';
print_r($arr);
echo '<hr>';
foreach ($person as $item) {
    echo $item['fname'].'  '.$item['lname'].'  / '.$item['email'].'<br>';
} 
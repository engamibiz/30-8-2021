<?php
/*$tasks=[
    ['name'=>'Task1','desc'=>'task1 description','completed'=>true],
    ['name'=>'Task2','desc'=>'task2 description','completed'=>false],
    ['name'=>'Task3','desc'=>'task3 description','completed'=>true],
    ['name'=>'Task4','desc'=>'task4 description','completed'=>true],
    ['name'=>'Task5','desc'=>'task5 description','completed'=>false],
];*/
include 'connect.php';
$query=$conn->prepare("SELECT * FROM tasks"); // اختار كل حاجة من جدول التاسك
$query->execute();
$tasks=$query->fetchAll();

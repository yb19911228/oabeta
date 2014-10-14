<?php
$_POST['thing_name'];$_POST['thing_starttime'];$_POST['thing_person'];$_POST['thing_remark'];
require_once'../model/model_thing.php';
$thing= new thing();
$thing->select();
?>
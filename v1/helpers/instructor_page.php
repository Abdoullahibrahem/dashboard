<?php
require_once 'C:\xampp\htdocs\dashboard\v1\controllers\classes.php';
//[A] instructor info select
function getSelected_ins()
{
   $select = new selectDataForIns ();
   $Instructor_info = $select->Total_Instructor_Info();
   return $Instructor_info;
}
?>
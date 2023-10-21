<?php
require_once 'C:\xampp\htdocs\dashboard\v1\controllers\classes.php';

//[A] courses info select
function getSelected_courses()
{
    $select = new selectDataForCourses();
    $Instructor_info = $select->Total_Courses_Info();
    return $Instructor_info;
}

<?php

require_once 'C:\xampp\htdocs\dashboard\v1\controllers\classes.php';

// [Z]
function Top_Categories()
{
    $courses = new Counter();

    $courses->Course_Category();
    $course_Categories = $courses->Course_Category(); // Get the data

    // Echo the JSON-encoded data
    return $course_Categories;
}

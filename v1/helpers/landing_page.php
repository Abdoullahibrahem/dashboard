<?php

require_once 'C:\xampp\htdocs\dashboard\v1\controllers\classes.php';


// [Z] user & mentor & courses & instractors  counters  
function getcounter()
{

    $counter = new Counter();

    $counter->Total_users();
    $users = $counter->Total_users();
    $counter->Total_Courses();
    $courses = $counter->Total_Courses();
    $counter->Total_Instructors();
    $Instructors = $counter->Total_Instructors();
    $counter->Total_Mentors();
    $Mentors = $counter->Total_Mentors();


    return [$users, $Instructors, $Mentors, $courses];
}

// [Z]
function Top_Categories()
{
    $top = new Counter();

    $top->Top_Tracks();
    $Top_Categories = $top->Top_Tracks(); // Get the data

    // Echo the JSON-encoded data
    return json_encode($Top_Categories);
}




// //[A] popularity select
// function getSelected()
// {
//     $select = new select();
//     $course_pop = $select->Total_Course_popularity();
//     return [$course_pop];
// }

<?php
require_once 'C:\xampp\htdocs\dashboard\v1\database\DB.php';
require_once 'C:\xampp\htdocs\dashboard\v1\database\queries.php';


// [Z] log in  class (I am writing this query here just for testing the code. I will modify it when the login page is created.)  z
class User extends conn
{
    public function login($username, $password)
    {
        $stmt = $this->conn->prepare("SELECT password FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $hash = $stmt->fetchColumn();
        if ($hash && password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }
}


// [Z] for first line in landing page (user and mentor counters )  
class Counter
{
    private $counter;
    const USERS_TABLE = 'users';
    const MENTORS_TABLE = 'teachers';
    const INSTRUCTORS_TABLE = 'teachers';
    const COURSES_TABLE = 'courses';


    public function __construct()
    {
        $this->counter = new count();
    }

    public function Total_users()
    {
        $count = $this->counter->getCount(self::USERS_TABLE);
        return $count;
    }

    public function Total_Mentors()
    {
        $count = $this->counter->getCount(self::MENTORS_TABLE, 'mentor');
        return $count;
    }

    public function Total_Instructors()
    {
        $count = $this->counter->getCount(self::INSTRUCTORS_TABLE, 'instractor');
        return $count;
    }

    public function Total_Courses()
    {
        $count = $this->counter->getCount(self::COURSES_TABLE);
        return $count;
    }
    public function Top_Tracks()
    {
        $count = $this->counter->getTopCategory();
        return $count;
    }
    public function Course_Category()
    {
        $count = $this->counter->getcoursesCategory();
        return $count;
    }
}


class select
{
    private $selected;
    const COURSES_TABLE = 'courses';
    const COURSES_POP = 'COURSE_POP';

    public function __construct()
    {
        $this->selected = new queries();
    }

    public function Total_Course_popularity()
    {
        $select = $this->selected->SelectTopCoursesByCoursPop(5);
        return $select;
    }
}

class Course_category
{
}

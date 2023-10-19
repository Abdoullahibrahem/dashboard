<?php
require_once 'C:\xampp\htdocs\dashboard\v1\database\DB.php';


//All queries should be written here



// [z] connections that extend from DB.php       
class conn
{
    protected $conn;


    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }
}

// [Z] counter query    
//  If you have another preferred method, please write it
class count extends conn
{
    public function getCount($targetTable, $role = null)
    {
        if ($targetTable === 'teachers') {
            $query = "SELECT COUNT(*) as count FROM $targetTable";
            if ($role) {
                $query .= " WHERE PERSON_TYPE = :role";
            }
            try {
                $stmt = $this->conn->prepare($query);
                if ($role) {
                    $stmt->bindParam(':role', $role);
                }
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result['count'];
            } catch (PDOException $e) {
                die("Failed to fetch count: " . $e->getMessage());
            }
        } else {
            $query = "SELECT COUNT(*) as count FROM $targetTable";
            try {
                $stmt = $this->conn->query($query);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result['count'];
            } catch (PDOException $e) {
                die("Failed to fetch count: " . $e->getMessage());
            }
        }
    }
    public function getTopCategory()
    {
        $query = "SELECT track, COUNT(*) as count FROM teachers GROUP BY track";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            $trackCounts = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $trackCounts[$row['track']] = $row['count'];
            }

            return $trackCounts;
        } catch (PDOException $e) {
            die("Failed to fetch count: " . $e->getMessage());
        }
    }
    public function getCoursesCategory()
    {
        $query = "SELECT Course_Category, COUNT(*) as count FROM Courses GROUP BY Course_Category";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            $trackCounts = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $trackCounts[$row['Course_Category']] = $row['count'];
            }

            return $trackCounts;
        } catch (PDOException $e) {
            die("Failed to fetch count: " . $e->getMessage());
        }
    }
}

class queries extends conn
{
    public function SelectTopCoursesByCoursPop($limit = 5)
    {
        $SL_Query = "SELECT course_name, COUNT(COURSE_POP) as course_count FROM courses GROUP BY course_name ORDER BY course_count DESC LIMIT :limit";
        $stmt = $this->conn->prepare($SL_Query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $topCourses = [];
        foreach ($results as $row) {
            $topCourses[] = $row['course_name'] . " ({$row['course_count']})";
        }

        return $topCourses;
    }
}

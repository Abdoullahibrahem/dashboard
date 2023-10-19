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

class queries extends Database
{
    // (A) function SelectData  =>> The function selects the information you want to display
    public function SelectData($table, $columns = "*", $where = "", $group = "") 
    {
        $SL_Query = "SELECT $columns FROM $table";

        // (A) If you need to specify the information more accurately
        if (!empty($where))
        {
            $SL_Query .= " WHERE $where"; 
        }

        if (!empty($group))
        {
            $SL_Query .= "GROUP BY $group"; 
        }

        $stmt = $this->conn->prepare($SL_Query);
        $stmt->execute();

        $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

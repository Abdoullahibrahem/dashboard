<?php
// [Z]
include 'C:\xampp\htdocs\dashboard\v1\helpers\course-category.php';
$result = Top_Categories();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/lib/fontawesome-free-6.4.2-web/css/all.min.css" />
    <link rel="stylesheet" href="css/course-category.css" />
    <title>Dashboard</title>
</head>

<body onload="myFunction(x)">
    <div id="mySidenav" class="sidenav nav-open">
        <img src="images/Logo.png" alt="vegaLogo" />
        <ul class="nav-list">
            <li>
                <div class="nav-list-btn active">
                    <img src="images/DashboardNavLogo.png" alt="" style="width: 40px" />
                    <a href="index.php" class="active">Dashboard</a>
                </div>
            </li>
            <li>
                <div class="nav-list-btn">
                    <img src="images/UsersNavLogo.png" alt="" style="width: 40px" />
                    <a href="users.php">Users</a>
                </div>
            </li>
            <li>
                <div class="nav-list-btn collapsibles">
                    <div class="nav-list-title">
                        <img src="images/MentorsNavLogo..png" style="width: 40px" alt="" />
                        <a href="#">Mentors</a>
                    </div>
                    <img src="images/ArrowIcon.png" class="icon" alt="" style="width: 8px" />
                </div>
                <ul class="content">
                    <li><a href="#">Mentors Overview</a></li>
                    <li><a href="#">Mentors List</a></li>
                    <li><a href="#">Mentors Payment</a></li>
                </ul>
            </li>
            <li>
                <div class="nav-list-btn collapsibles">
                    <img src="images/InstructorsNavLogo.png" style="width: 40px" alt="" />
                    <a href="#">Instructors</a>
                    <img src="images/ArrowIcon.png" class="icon" alt="" style="width: 8px" />
                </div>
                <ul class="content">
                    <li><a href="#">Instructors Overview</a></li>
                    <li><a href="instructor-list.php">Instructors List</a></li>
                    <li><a href="#">Instructors Payment</a></li>
                </ul>
            </li>
            <li>
                <div class="nav-list-btn collapsibles">
                    <img src="images/CoursesNavLogo.png" style="width: 40px" alt="" />
                    <a href="#">Courses</a>
                    <img src="images/ArrowIcon.png" class="icon" alt="" style="width: 8px" />
                </div>
                <ul class="content">
                    <li><a href="course-category.php">Category</a></li>
                    <li><a href="Courses_List.php">Course List</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="main" class="main-shrink">
        <nav>
            <div class="nav-search">
                <img class="nav-btn" onclick="toggleNav()" src="images/burgerMenu.png" />
                <div class="search-bar">
                    <input type="search" name="search" id="search" />
                    <img src="images/searchIcon.png" alt="" />
                </div>
            </div>
            <div class="nav-profile">
                <img src="images/ringIcon.png" class="nav-btn" alt="" />
                <img src="images/notificationIcon.png" class="nav-btn" alt="" />
                <div class="nav-profile-info">
                    <div class="profile-data">
                        <h4>Ahmed Samy</h4>
                        <p>Admin</p>
                    </div>
                    <img src="images/man.png" alt="" />
                </div>
                <img src="images/settingIcon.png" class="nav-btn" alt="" />
            </div>
        </nav>
        <section class="header">
            <div class="Categories">
                <h1>Course category</h1>
                <p>You have total 8 Categories</p>
            </div>
            <div class="filter">
                <select name="filtered-by" id="filtered-by">
                    <option value="Filtered-By" selected disabled hidden>Filtered By</option>
                    <option value="Discount-low to high">Discount-low to high</option>
                    <option value="Discount-high to low">Discount-high to low</option>
                    <option value="Price-low to high">Price-low to high</option>
                    <option value="Price-high to low">Price-high to low</option>
                </select>
                <button><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Add Category</button>
            </div>
        </section>
        <section class="course-category">
            <?php
            foreach ($result as $category => $value) {
            ?>
                <div class="web-devolopment">
                    <div class="SubCategories">
                        <img src="images/wd.png">
                        <span>
                            <h2>
                                <?php echo $category;  ?>
                            </h2>
                            <p>
                                <?php echo $value; ?> SubCategories
                            </p>
                        </span>
                    </div>
                    <p>Devolop the website with web application</p>
                    <a href="#" class="a1">Responsive Design</a>
                    <a href="#" class="a2">Wordpress Cutomization</a> <br>
                    <a href="#" class="a3">Theme Development</a>
                    <a href="#" class="a4">Bootstrap</a>
                    <a href="#" class="a5">Html & Css grid</a>
                </div>
            <?php
            }
            ?>
        </section>
        <script src="js/main.js"></script>
</body>


</html>
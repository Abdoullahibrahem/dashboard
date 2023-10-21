<?php
include 'C:\xampp\htdocs\dashboard\v1\helpers\courses_list.php';
$courses = getSelected_courses();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/lib/fontawesome-free-6.4.2-web/css/all.min.css" />
  <link rel="stylesheet" href="css/Courses.css" />
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
    <!-- CONTENT -->
    <section id="content">

      <section class="table__body">



        <table>
          <thead>
            <tr>
              <th><input type="checkbox" name="checkbox" id="checkbox"> Courses</th>

              <th> Category </th>
              <th> Instructor</th>
              <th> Lesson </th>
              <th> Price </th>
              <th> Staus </th>


            </tr>


          </thead>


          <tbody>
            <?php foreach ($courses as $course) {
            ?>
              <tr>

                <td class="td1">
                  <input type="checkbox" name="checkbox" id="checkbox">
                  <img src="images/Screenshot (252).png" alt="">

                  <h1><?= $course['Course_name']; ?></h1>




                </td>

                <td class="td2"> <?= $course['Course_Category']; ?> </td>
                <td class="td2"> <?= $course['NAME']; ?> </td>
                <td>
                  <p>Total Lesson :<?= $course['Course_Duration']; ?> month </p>
                </td>
                <td class="td2"> <?= $course['Course_Cost']; ?>

                </td>
                <td class="td3"> <?= $course['status']; ?>

                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </section>

  </div>

  <!-- <script src="js/lib/bootstrap.js"></script>
    <script src="js/lib/jquery-3.7.1.min.js"></script>
    <script src="js/lib/popper.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.43.0/apexcharts.min.js"></script>
  ا
  <script src="js/main.js"></script>
</body>

</html>
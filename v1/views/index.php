<?php
// [Z]
include 'C:\xampp\htdocs\dashboard\v1\helpers\landing_page.php';
$result = getcounter();


echo '<script>';
echo 'var chartData = ' . Top_Categories() . ';';
echo '</script>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/lib/fontawesome-free-6.4.2-web/css/all.min.css" />
  <link rel="stylesheet" href="css/nav.css" />
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
    <!-- MAIN -->
    <main>


      <ul class="box-info">
        <li>
          <i class='bx fa-solid fa-users'></i>
          <span class="text">
            <h4>Total Users</h4>
            <h3><?= $result[0]; ?></h3>

          </span>
        </li>
        <li>
          <i class='bx fa-solid fa-user-secret'></i>
          <span class="text">
            <h4>Total Instructors</h4>
            <h3><?= $result[1]; ?></h3>

          </span>
        </li>
        <li>
          <i class='bx fa-solid fa-user-secret'></i>
          <span class="text">
            <h4>Total Mentors</h4>
            <h3><?= $result[2]; ?></h3>

          </span>
        </li>
        <li>
          <i class='bx fa-solid fa-play'></i>
          <span class="text">
            <h4>Total Courses</h4>
            <h3><?= $result[3]; ?></h3>
          </span>

        </li>
      </ul>
      <div class="charts">

        <div class="charts-card">
          <p class="chart-title">Top Categories</p>
          <div id="bar-chart"></div>
        </div>

        <div class="charts-card">
          <p class="chart-title">Enrolment Rate Average</p>
          <div id="area-chart"></div>
        </div>

        <div class="charts-card">
          <p class="chart-title">Earing</p>
          <div id="comp-chart"></div>
        </div>


        <div class="charts-card">
          <p class="chart-title">Top Sales</p>
          <div id="pie-chart"></div>
        </div>



        <div class="charts-card">
          <p class="chart-title">Active Users</p>
          <div id="active-chart">
            <div class="all-users">
              <div class="users">
                <h4>Monthly</h4>
                <h5><i class="fa-solid fa-up-long" style="color: #83ea06;"></i> 4.25k</h5>
                <h6>10%</h6>
              </div>
              <div class="users">
                <h4>weekly</h4>
                <h5><i class="fa-solid fa-up-long fa-rotate-180 " style="color: #ea0628;"></i> 1.20k</h5>
                <h6>5%</h6>
              </div>
              <div class="users">
                <h4>Daily(AVG)</h4>
                <h5><i class="fa-solid fa-up-long" style="color: #83ea06;"></i> 0.50%</h5>
                <h6>10%</h6>
              </div>
            </div>

          </div>
        </div>



        <div class="table-data">

          <div class="order">
            <div class="head">
              <h3>Top Mentors</h3>
              <i class='bx <i fa-solid fa-magnifying-glass'></i>
              <i class='bx <i fa-solid fa-filter'></i>
            </div>
            <table>

              <tbody>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i><i class="fa-solid fa-star" style="color: #FEC901;"></i>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>





        </div>
        <div class="table-data">

          <div class="order">
            <div class="head" style="display: block;">
              <h3>Top Courses</h3>
              <p style="font-size: 10px; color: gray; padding-top: 5px;">In last 15 days Buy and sells over view</p>

            </div>
            <table>

              <tbody>
                <tr>
                  <td>
                    <img src="images/Screenshot (252).png">
                    <div>
                      <p>Andorid Development</p>
                      <p style="color: grey; font-size: 13px;">50%</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <p>10,000$</p>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Screenshot (252).png">
                    <div>
                      <p>Andorid Development</p>
                      <p style="color: grey; font-size: 13px;">50%</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <p>10,000$</p>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Screenshot (252).png">
                    <div>
                      <p>Andorid Development</p>
                      <p style="color: grey; font-size: 13px;">50%</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <p>10,000$</p>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Screenshot (252).png">
                    <div>
                      <p>Andorid Development</p>
                      <p style="color: grey; font-size: 13px;">50%</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <p>10,000$</p>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Screenshot (252).png">
                    <div>
                      <p>Andorid Development</p>
                      <p style="color: grey; font-size: 13px;">50%</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <p>10,000$</p>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Screenshot (252).png">
                    <div>
                      <p>Andorid Development</p>
                      <p style="color: grey; font-size: 13px;">50%</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <p>10,000$</p>
                    <p style="color: grey; font-size: 13px;">25 Preview</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>





        </div>
        <div class="table-data">

          <div class="order">
            <div class="head">
              <h3>Top Instructors</h3>
              <i class='bx <i fa-solid fa-magnifying-glass'></i>
              <i class='bx <i fa-solid fa-filter'></i>
            </div>
            <table>

              <tbody>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <button>25 Preview</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <button>25 Preview</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <button>25 Preview</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <button>25 Preview</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td>

                    <button>25 Preview</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="images/Rectangle 1.png">
                    <div>
                      <p>John Doe</p>
                      <p style="color: grey; font-size: 13px;">AhmedGamal@gmail.com</p>
                    </div>
                  </td>
                  <td></td>
                  <td>
                    <button>25 Preview</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>





    </main>
    <!-- MAIN -->
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
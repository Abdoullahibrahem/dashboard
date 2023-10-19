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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">

  <title>Dashboard</title>
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <i class='bx bxs-smile'></i>
      <span class="text">VEGA</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="#">
          <i class=" bx fa-solid fa-gauge"></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx fa-solid fa-users"></i>
          <span class="text">Users</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx fa-solid fa-user-secret'></i>
          <span class="text">Mentors</span>
        </a>
      </li>
      <li>
        <a href="instructor-list.php">
          <i class="bx fa-solid fa-user-secret"></i>
          <span class="text">Instructors</span>
        </a>
      </li>
      <li>
        <a href="course-category.php">
          <i class='bx fa-solid fa-chalkboard-user'></i>
          <span class="text">Courses</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">

      <li>
        <a href="#" class="logout">
          <i class="bx fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu'></i>
      <a href="#" class="nav-link">Categories</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search">
          <button type="submit" class="search-btn"><i class='bx fa-solid fa-magnifying-glass'></i></button>
        </div>
      </form>
      <a href="#" class="notification">
        <i class='bx fa-regular fa-bell'></i>
      </a>
      <a href="#" class="notification">
        <i class='bx fa-regular fa-message'></i>
      </a>

      <a href="#" class="profile">
        <img src="img/Rectangle 1.png">


      </a>



    </nav>
    <!-- NAVBAR -->

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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Screenshot (252).png">
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
                    <img src="img/Screenshot (252).png">
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
                    <img src="img/Screenshot (252).png">
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
                    <img src="img/Screenshot (252).png">
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
                    <img src="img/Screenshot (252).png">
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
                    <img src="img/Screenshot (252).png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
                    <img src="img/Rectangle 1.png">
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
  <!-- CONTENT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.43.0/apexcharts.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
<?php
include 'C:\xampp\htdocs\dashboard\v1\helpers\instructor_page.php';
$result_ins = getSelected_ins();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/instructor-list.css">
  <link rel="stylesheet" href="font/fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>
  <!-- SIDEBAR -->
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

    <section class="table__body">
      <div class="container">
        <p>Instructor</p>

        <form class="zz">
          <input type="text" class="search-input" placeholder="Search by name">
          <button><i class="fas fa-search"></i></button>
        </form>
        <select id="status" name="">
          <option>Status</option>
        </select>
        <button class="add">+ ADD</button>
        </form>
      </div>
      </div>


      <table>
        <thead>
          <tr>
            <th><input type="checkbox" name="checkbox" id="checkbox"> Instructor</th>
            <th> Phone </th>
            <th> Country </th>
            <th> Active Courses</th>
            <th> Description </th>
          </tr>
        </thead>


        <tbody>
          <?php foreach ($result_ins as  $ins) {

          ?>
            <tr>

              <td class="td1">
                <input type="checkbox" name="checkbox" id="checkbox">
                <img src="img/Frame 78.png" alt="">
                <div>
                  <h1><?= $ins['NAME'] ?></h1>
                  <p><?= $ins['EMAIL'] ?></p>
                </div>


              </td>

              <td class="td2"> <?= $ins['PHONE'] // MANGE DATA BASE
                                ?> </td>
              <td class="td2"> <?= $ins['COUNTRY'] ?> </td>
              <td>
                <p><?= $ins['ACTIVE_C_COUNT'] ?> Active Course</p>
              </td>
              <td class="td2"> <?= substr($ins['ABOUT'], 0, 50) ?>

              </td>
            </tr>
          <?php } ?>



        </tbody>
      </table>
    </section>

</body>

</html>
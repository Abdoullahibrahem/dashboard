<?php
// [Z]
include 'C:\xampp\htdocs\dashboard\v1\helpers\course-category.php';
$result = Top_Categories();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/course-category.css">
    <title>course category</title>
</head>

<body>
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
                        <h2><?php echo $category;  ?></h2>
                        <p><?php echo $value; ?> SubCategories</p>
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
</body>

</html>
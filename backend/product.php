<?php
    include('header.php');
    include('navbar.php');

    include('dbconfig.php');
    $sql = "SELECT * FROM products";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    // var_dump($result);
?>
<section class=" text-center py-5 productbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Products</h1>
            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="1" d="M0,192L30,186.7C60,181,120,171,180,181.3C240,192,300,224,360,208C420,192,480,128,540,90.7C600,53,660,43,720,58.7C780,75,840,117,900,133.3C960,149,1020,139,1080,144C1140,149,1200,171,1260,197.3C1320,224,1380,256,1410,272L1440,288L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
</svg>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                    foreach ($result as $key => $value) {
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/<?php echo $value['imgname'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['product_name'];?></h5>
                            <p class="card-text"><?php echo $value['product_descirption'];?></p>
                            <a href="#" class="btn btn-primary btn-sm">See more</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
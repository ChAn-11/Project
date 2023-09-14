<?php 
    include("../adminheader.php");
    // include("../navbar.php");
    include("../dbconfig.php");
    if(isset($_POST['save_product']))
    {
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $price = $_POST['price'];
        $image = $_POST['image'];
    
        try {

            $query = "INSERT INTO products (product_name, product_descirption,price,image) VALUES (?, ?, ?, ?)";
            $statement = $dbConn->prepare($query);
            $statement->bindParam(1, $product_name);
            $statement->bindParam(2, $product_description);
            $statement->bindParam(3, $price);
            $statement->bindParam(4, $image);
    
            $query_execute = $statement->execute();

            if($query_execute)
            {
                $_SESSION['message'] = "Added Successfully";
                header('Location: index.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Not Added";
                header('Location: index.php');
                exit(0);
            }

        } catch (PDOException $e) {

            echo "My Error Type:". $e->getMessage();
        }
    }
?>
<div class="container">
    <div class="col-md-6 mx-auto">
    <form action="create.php" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="product_name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" name="product_description" id="product_description" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" name="price" id="product_price" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image" id="product_image" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
   
    <input type="submit" name="save_product" value="Save Products" class="btn btn-success">
</form>
    </div>
</div>
<?php include("../footer.php");?>
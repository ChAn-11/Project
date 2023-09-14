<?php 
    include("../adminheader.php");
    // include("../navbar.php");
    include("../dbconfig.php");
    if(isset($_POST['save_service']))
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
       

        try {

            $query = "INSERT INTO services (name, description) VALUES (?, ?)";
            $statement = $dbConn->prepare($query);
            $statement->bindParam(1, $name);
            $statement->bindParam(2, $description);
    
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
      <label for="name" class="form-label">Service Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Services Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
   
    <input type="submit" name="save_service" value="Save Services" class="btn btn-success">
</form>
    </div>
</div>
<?php include("../footer.php");?>
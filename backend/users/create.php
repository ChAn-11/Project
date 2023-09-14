<?php 
    include("../adminheader.php");
    // include("../navbar.php");
    include("../dbconfig.php");
    if(isset($_POST['save_user']))
    {
        $surname = $_POST['surname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {

            $query = "INSERT INTO users (surname, firstname, email, password) VALUES (?, ?, ?, ?)";
            $statement = $dbConn->prepare($query);
            $statement->bindParam(1, $surname);
            $statement->bindParam(2, $firstname);
            $statement->bindParam(3, $email);
            $statement->bindParam(4, $password);
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
      <label for="surname" class="form-label">Username</label>
      <input type="text" name="surname" id="surname" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="firstname" class="form-label">Firstname</label>
      <input type="text" name="firstname" id="firstname" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="firstname" class="form-label">Email</label>
      <input type="text" name="email" id="firstname" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="firstname" class="form-label">Password</label>
      <input type="text" name="password" id="firstname" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <input type="submit" name="save_user" value="Save User" class="btn btn-success">
</form>
    </div>
</div>
<?php include("../footer.php");?>
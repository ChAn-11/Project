<?php 
  session_start();
  if(empty($_SESSION['email']))
  {
    header('location:../login/login.php');
  }
    include('../adminheader.php');
    include('../dbconfig.php');
    $sql = "SELECT * FROM services";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Service Name</th>
                    <!-- <th>Price</th> -->
                    <th>Description
                    <a href="create.php" class="btn btn-sm btn-success">Add Services</a>
                    </th>
                </tr>
                <?php
                    foreach ($result as $key => $value) {
                ?>
                    <tr>
                        <td>
                            <?php echo $value['name'];?>
                        </td>
                        <td>
                            <?php echo $value['description'];?>
                        </td>
                        <!-- <td>
                            <?php //echo $value['price'];?>
                        </td> -->
                        <td>
                            <a href="delete.php?id=<?php echo $value['id'];?>" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>

<?php include('../footer.php');?>
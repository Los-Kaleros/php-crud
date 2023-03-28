<?php 
    $actualPage = 'View users';
    include 'inc/header.php';
?>
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="">View users<a href="addUser.php" class="btn btn-primary float-end">Add user</a></h3>
                    </div>
                    <div class="card-body">
                        <?php include 'inc/message.php'; ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Position</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    include 'inc/connection.php';
                                    
                                    $sql = "SELECT * FROM users";
                                    $result = mysqli_query($con, $sql);

                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']?></th>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['age']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td><?php echo $row['phone']?></td>
                                            <td><?php echo $row['gender']?></td>
                                            <td><?php echo $row['position']?></td>
                                            <td><a href="" class="btn btn-info me-1">View</a><a href="" class="btn btn-warning me-1">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                            


                                    <?php } ?>
                                
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
       </div> 
<?php include 'inv/footer.php'?>

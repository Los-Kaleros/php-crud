<?php 
    $actualPage = 'Add users';
    include 'inc/header.php';

?>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="">Add user<a href="index.php" class="btn btn-primary float-end">Back</a></h3>
        
                    </div>
                    <div class="card-body">
                        <form action="php/add.php" method="POST">

                            <?php include 'inc/message.php';?>

                            <div class="mb-3">
                                <label for="userName" class="form-label">Name<span>*</span></label>
                                <input type="text" class="form-control" id="userName" name="userName">
                            </div>
                            <div class="mb-3">
                                <label for="userAge" class="form-label">Age<span>*</span></label>
                                <input type="number" class="form-control" id="userAge" name="userAge">
                            </div>
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email<span>*</span></label>
                                <input type="email" class="form-control" id="userEmail" name="userEmail">
                            </div>
                            <div class="mb-3">
                                <label for="userPhone" class="form-label">Phone<span>*</span></label>
                                <input type="tel" class="form-control" id="userPhone" name="userPhone">
                            </div>



                            <div class="mb-3 row">
                                <div class="col-4">
                                    <label for="userGender" class="form-label">Gender<span>*</span></label>
                                        <div class="form-check">
                                            <input class="form-check-input black-radio border-dark" type="radio" name="userGender" id="userGender" value="male" checked>
                                            <label class="form-check-label" for="userGender">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input black-radio border-dark" type="radio" name="userGender" id="userGender" value="female">
                                            <label class="form-check-label" for="userGender">Female</label>
                                        </div>
                                </div>
                                <div class="col-8">
                                    <label for="userPosition" class="form-label">Working position<span>*</span></label>

                                <select class="form-select" name="userPosition">
                                    <option selected>Open this select menu</option>
                                    <option value="Programmer">Programmer</option>
                                    <option value="Mechanic">Mechanic</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Plumber">Plumber</option>
                                    <option value="Doctor">Doctor</option>
                                </select>
                                </div>
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn bg-dark text-light" name="userSave">Save user</button>
                            </div>

                        </form>
                    </div>
                    </div>
                </div>
            </div>
       </div> 
<?php include 'inv/footer.php'?>
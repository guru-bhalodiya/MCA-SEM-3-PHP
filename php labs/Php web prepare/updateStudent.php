<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $student = $s->getById($_GET['id']);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <v class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Updation Form</h3>
                <form action="con_student_registretion.php" method="post">

                <div class="row">
                    <div class="col-md-6 mb-4">

                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="name" value="<?php echo($student['name']) ?>" class="form-control form-control-lg" />
                        <label class="form-label" for="firstName">Name</label>
                    </div>

                    </div>
                    <div class="col-md-6 mb-4">

                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="enrollment_number" value="<?php echo($student['enrollment_number']) ?>" class="form-control form-control-lg" />
                        <label class="form-label" for="lastName">Enrollment Number</label>
                    </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">

                    <div data-mdb-input-init class="form-outline">
                        <input type="password" name="password" value="<?php echo($student['password']) ?>" class="form-control form-control-lg" />
                        <label class="form-label" for="firstName">Password</label>
                    </div>

                    </div>
                    <div class="col-md-6 mb-4">

                    <select class="select form-control-lg" name="course">
                    <option value="-1"
                        <?php 
                            if($student['course'] == -1){
                                echo("selected");
                            }
                        ?>
                        disabled> --select course-- </option>
                        <option value="Mca"
                        <?php 
                            if($student['course'] == "MCA"){
                                echo("selected");
                            }
                        ?>
                        >MCA</option>
                        <option value="Btech"
                        <?php 
                            if($student['course'] == "B.Tech"){
                                echo("selected");
                            }
                        ?>
                        >B.Tech</option>
                        <option value="Bca"
                        <?php 
                            if($student['course'] == "BCA"){
                                echo("selected");
                            }
                        ?>
                        >BCA</option>
                        <option value="BscIT"
                        <?php 
                            if($student['course'] == "BscIT"){
                                echo("selected");
                            }
                        ?>
                        >BscIT</option>
                    </select>
                    <label class="form-label select-label">Course</label>


                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                    <select class="select form-control-lg" name="sem">
                    <option value="-1" <?php 
                            if($student['sem'] == -1){
                                echo("selected");
                            }
                        ?>
                        disabled> --select sem-- </option>
                        <option value="1"
                        <?php 
                            if($student['sem'] == 1){
                                echo("selected");
                            }
                        ?>
                        >1</option>
                        <option value="2"
                        <?php 
                            if($student['sem'] == 2){
                                echo("selected");
                            }
                        ?>
                        >2</option>
                        <option value="3"
                        <?php 
                            if($student['sem'] == 3){
                                echo("selected");
                            }
                        ?>
                        >3</option>
                        <option value="4"
                        <?php 
                            if($student['sem'] == 4){
                                echo("selected");
                            }
                        ?>
                        >4</option>
                        <option value="5"
                        <?php 
                            if($student['sem'] == 5){
                                echo("selected");
                            }
                        ?>
                        >5</option>
                        <option value="6"
                        <?php 
                            if($student['sem'] == 6){
                                echo("selected");
                            }
                        ?>
                        >6</option>
                        <option value="7"
                        <?php 
                            if($student['sem'] == 7){
                                echo("selected");
                            }
                        ?>
                        >7</option>
                        <option value="8"
                        <?php 
                            if($student['sem'] == 8){
                                echo("selected");
                            }
                        ?>
                        >8</option>
                    </select>
                    <label class="form-label select-label">Semester</label>

                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Save" />
                </div>

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
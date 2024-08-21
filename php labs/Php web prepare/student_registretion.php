<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      .gradient-custom {
        /* fallback for old browsers */
        background: #f093fb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(9,32,63), rgba(83,120,149));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(9,32,63), rgba(83,120,149))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
      }

    </style>
  </head>
  <body>
    <!-- <div class="container">
        <form action="con_student_registretion.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Enrollment number</td>
                    <td>:</td>
                    <td><input type="text" name="enrollment_number"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td>:</td>
                    <td><select name="course">
                        <option value="-1" selected disabled> --select course-- </option>
                        <option value="Mca">MCA</option>
                        <option value="Btech">B.Tech</option>
                        <option value="Bca">BCA</option>
                        <option value="BscIT">BscIT</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Sem</td>
                    <td>:</td>
                    <td><select name="sem">
                        <option value="-1" selected disabled> --select sem-- </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="save"></td>
                </tr>
            </table>
        </form>
    </div> -->





<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <v class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="con_student_registretion.php" method="post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" name="name" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" name="enrollment_number" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Enrollment Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                <select class="select form-control-lg" name="course">
                        <option value="-1" selected disabled> --select course-- </option>
                        <option value="Mca">MCA</option>
                        <option value="Btech">B.Tech</option>
                        <option value="Bca">BCA</option>
                        <option value="BscIT">BscIT</option>
                </select>
                <label class="form-label select-label">Course</label>


                </div>
              </div>


              

             
                
              

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg" name="sem">
                    <option value="-1" disabled>Choose option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
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
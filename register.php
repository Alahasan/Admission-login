<?php include 'mm.php' ?>
<?php 
 if (isset($_POST['regbtn'])) {
  $dt= date('Y-m-d');
  $stud_aname = $_POST['s_name'];
  $stud_fname = $_POST['s_fname'];
  $stud_mname = $_POST['s_mname'];
  $stud_email = $_POST['s_email'];
  $stud_phn = $_POST['s_phn'];
  $stud_db = $_POST['s_db'];
  $stud_pass = $_POST['s_pass'];
  $stud_cpass = $_POST['s_cpass'];
  $stud_sname = $_POST['s_sname'];

if ($stud_pass != $stud_cpass) {
  $err= "Password don't match or invailed input";

 } else{
  $sql= "INSERT INTO $TBL_STUD(stud_name, stud_father_name, stud_mother_name, stud_date_of_birth, stud_mobile_no, stud_email, stud_school, stud_register_date, stud_password) VALUES ('$stud_aname', '$stud_fname', '$stud_mname', '$stud_db', '$stud_phn', '$stud_email', '$stud_sname', '$dt', '$stud_pass')";
  if ($conn->query($sql)===true) {
  $msg = "Registration successfull. <a href ='index.php'> Login-here</a>";
}else{
  $err ="Registration failed, Password don't match or invailed input".$conn->error;
}

}
}
 ?>




<section class="bg-image"
  style="background-image: url(Assets/ll.jpg); height: 1330px; position: 100%;">
  <div class="mask d-flex align-items-center h-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Registrasion form</h2>

              <form method="post">
                <?php
                  if (isset($err)) {
                    echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  '.$err.'
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
              
                  }

                  if (isset($msg)) {
                    echo'
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  '.$msg.'
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
              ;}
              ?>

                <div class="form-outline mb-3">
                  <input type="text" name="s_name" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>


                <div class="form-outline mb-3">
                  <input type="text" name="s_fname" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Father Name</label>
                </div>


                <div class="form-outline mb-3">
                  <input type="text" name="s_mname" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Mother Name</label>
                </div>

                <div class="form-outline mb-3">
                <input type="text" name="s_sname" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">School name</label>
                </div>


                <div class="form-outline mb-3">
                <input type="date" name="s_db" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Date of Birth</label>
                </div>

                <div class="form-outline mb-3">
                  <input type="text" name="s_phn" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Phone No</label>
                </div>

                <div class="form-outline mb-3">
                  <input type="email" id="form3Example3cg" name="s_email" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-3">
                  <input type="password" name="s_pass" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-3">
                  <input type="password" name="s_cpass" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

               <div class="form-check d-flex justify-content-center mb-1">
                  
                  <label class="form-check-label" for="form2Example3g">
                    *Fill all the information carefully!<br>
                    *Recheck form
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="regbtn">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already applied? <a href="index.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>
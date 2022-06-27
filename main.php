<?php include "config.php"?>
<?php if (!isset($_SESSION['login_status']) && $_SESSION['login_status']!=true) {
  header('location:index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSC_Admission | Profile</title>
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

  <!-- datatable css -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-bold" href="index.php"> 
        Home
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="main.php">Profile</a>
          </li>
        </ul>
       
       <div class="dropdown">
      <div class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user"></i> 
        <?php if (isset($_SESSION['stud_name'])){echo $_SESSION['stud_name'];} ?>
      </div>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
      </ul>
    </div>
      </div>
    </div>
  </nav><br>

 <?php
$sql = "SELECT * FROM $TBL_STUD WHERE ID =".$_SESSION['ID'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {?>
<div class="box">
    <table border="1" align="center" width="40%">

      <tr>
        <th colspan="3"><h1>Your Information</h1></th>
      </tr>
      <tr>
        <td>Admission Id</td>
        <td>:</td>
        <td><?php echo $row['ID']?></td>
      </tr>
      <tr>
        <td>NAME</td>
        <td>:</td>
        <td><?php echo $row['stud_name']?></td>
      </tr>
      <tr>
        <td>Father name</td>
        <td>:</td>
        <td><?php echo $row['stud_father_name']?></td>
      </tr>
      <tr>
        <td>Mother name</td>
        <td>:</td>
        <td><?php echo $row['stud_mother_name']?></td>
      </tr>
      <tr>
        <td>School Name</td>
        <td>:</td>
        <td><?php echo $row['stud_school']?></td>
      </tr>
      <tr>
        <td>Date Of Birth</td>
        <td>:</td>
        <td><?php echo $row['stud_date_of_birth']?></td>
      </tr>
      <tr>
        <td>Phone No</td>
        <td>:</td>
        <td><?php echo $row['stud_mobile_no']?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo $row['stud_email']?></td>
      </tr>
      <tr>
        <td>Register Date</td>
        <td>:</td>
        <td><?php echo $row['stud_register_date']?></td>
      </tr>
    </table>
  </div>
  <br>
  <center>
    <button type="button" align="center"class="btn btn-danger">Delete</button>
    <button class="btn btn-success" onclick="window.print()">Print</button>
  </center><br><br>

   <?php }
} else {
  echo "0 results";
}
 ?>







  
  <style type="text/css">
    td{
      width: auto;
      padding:15px 35px;
      text-align: left;
      font-size: 20px;
    }
    tr{
      text-align: center;
      width:auto;
    }
  </style>













</body>
</html>






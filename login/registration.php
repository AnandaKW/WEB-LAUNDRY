<?php include('../connect.php');

if(isset($_POST['submit'])){
   extract($_POST);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
      $info = $db->query($sql);
          if($info->num_rows>0) 
          { 
            $valid = 'Allready'; 
          }else{
            $insert = "insert into user(nama,username,password,role) 
             VALUES('".$nama."','".$username."','".$password."','".$role."')";
              $query1 = $db->query($insert);

              $insert1 = "insert into user_login(username,password) 
             VALUES('".$username."','".$password."')";
             $query = $db->query($insert1);
             if($query1){
              $valid = 'true';
             }else{
              $valid = 'false';
             }
          }
    
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Thelaundry ! Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4><span class="glyphicon glyphicon-user"></span> Registration</h4>
        </div>
        <?php if(isset($valid) && $valid == 'false') { ?>
        <div class="alert alert-danger">
          Invalid Username or Password
                </div>
                <?php };
                if(isset($valid) && $valid == 'true') { ?>
        <div class="alert alert-danger">
         Registration Sucessfully
                </div>
                <?php };
                if(isset($valid) && $valid == 'Allready') { ?>
        <div class="alert alert-danger">
         This User Allready Register
                </div>
                <?php } ?>       
        <div class="modal-body" style="padding:40px 50px;">
          <form  role="form" method="post" action=""> 
            <div class="form-group">
             <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control"
               id="username" required="" name="username" placeholder="Enter User Name">
            </div>


             <div class="form-group">
             <label for="password"><span class="glyphicon glyphicon-lock"></span> Password</label>
              <input type="password" class="form-control" name="Contact_No" required="" placeholder="Enter Password">
            </div>


            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <input type="submit" name="submit" class="form-control btn btn-success btn-block"  placeholder="Submit">
             <!--  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button> -->
          </form>
        </div>
        <div class="modal-footer">
          <p><a href="index.php">Main website</a></p>
          <p>Allready Register <a href="Login.php ">Login</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

    $('#myModal').modal({
    backdrop: 'static',   // This disable for click outside event
    keyboard: true        // This for keyboard event
})
</script>
</body>
</html>

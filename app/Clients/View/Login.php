
<form method="POST" action="index.php?url=login" name="form_login" id="form_login" class="col-5 m-auto pb-3 mt-5 rounded border shadow ">
  <div class="bg-danger  p-2 rounded-top   mb-3">
  
  <h3 class=" text-center text-light">Đăng Nhập</h3>
  </div>
  <input type="text" name="login" id="login" value="<?php if(isset($mess) &&!empty($mess)) echo $mess;?>">
  <div class=" p-2">
    <label class="form-label text-secondary">UserName</label>
    <input type="text" name="username"  id="username" class="form-control"  >
  </div>
  <div class=" p-2">
    <label class=" text-secondary form-label">Password</label>
    <input type="password" name="password"  id="password" class="form-control">
  </div>

  <div class="col-5 p-2 m-auto">
    <button type="submit" name="submit_login"  id="submit_login" class="ms-5 btn btn-success">Submit</button>
  </div>  

  
  
</form>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<!-- <script src="./app/public/js/login.js" type="text/javascript"></script> -->
<script type="text/javascript">
  $(document).ready(function (){
  $("#submit_login").on('click', function (){
    var username = $("#username").val();
    var password = $("#password").val();
    var submit_login = $("#submit_login").val();
    var login = $("#login").val();
    alert(login);
    // var data = $("#form_login").serialize();
    // alert(login);
    $.ajax(
      {
      url: 'index.php?url=login',
      method: 'POST',
      data: {
        username : username,
        password : password,
        submit_login: submit_login
      },
      success: function(response){
          
          // if(login == 1){
          //   console.log(login);
          // }
          
          // if(login!="login" && login ==""){
          //   alert("dell");
          // }else{
          //   if(login === "login"){
          //     alert("ok");
          //   }
            
          // }
      },
      dataType:'text'
    });
  })
})
</script>

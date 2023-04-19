
<form method="post" id="form"class="col-5 m-auto pb-3 mt-5 rounded border shadow ">
  <div class="bg-danger  p-2 rounded-top   mb-3">
  <div id="result"></div>
  <h3 class=" text-center text-light">Đăng Ký</h3>
  </div>
  

    <div class=" p-2">
    <label class="form-label text-secondary">FullName</label>
    <input type="text" name="fullname" id="fullname" class="form-control"  >
  </div>
  <div class=" p-2">
    <label class="form-label text-secondary">UserName</label>
    <input type="text" name="username" id="username" class="form-control"  >
  </div>
  
  <div class="p-2">
    <label for="exampleInputEmail1" class="text-secondary form-label">Email address</label>
    <input type="email" name="mail" id="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class=" p-2">
    <label for="exampleInputPassword1" class=" text-secondary form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="col-5 p-2 m-auto">
    <button type="submit" name="submit_dk" id="submit_dk" class="ms-5 btn btn-success">Submit</button>
  </div>  

  
  
</form>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).on("click","#submit_dk", function (e) {
  e.preventDefault();
  var fullname = $("#fullname").val();
  var username = $("#username").val();
  var mail = $("#mail").val();
  var password = $("#password").val();
  var submit_dk = $("#submit_dk").val();
  $.ajax({
    url: "index.php?url=register",
    type: "post",
    data: {
      fullname: fullname,
      username : username,
      mail : mail,
      password : password,
      submit_dk : submit_dk
    },
    success: function(data) {
      Swal.fire({
        icon: 'success',
        text: 'Đăng ký thành công'
      })
      .then(()=>{
        window.location.href = 'index.php?url=login';
      });
      
    }


  })
  

  

  $('#form')[0].reset();
  
})
</script>
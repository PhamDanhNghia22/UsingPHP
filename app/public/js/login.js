$(document).ready(function (){
  $("#submit_login").on('click', function (){
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax(
      {
      url: 'index.php?url=login',
      method: 'POST',
      data:{
        login: 1,
        username : username,
        password : password,
      },
      success: function(response){
          console.log(response);
          // if(res == 1){
            
          // }
      },dataType:'text'
    });
  })
})
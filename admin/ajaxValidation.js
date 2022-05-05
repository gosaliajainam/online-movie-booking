$(document).ready(function(){
  $("#checkValidation").click(function(){
    var username = $("#userEmail").val().trim();
    var password = $("#userPassword").val().trim();
    $.ajax({
      url:'showData.php',
      type:'post',
      data:{username:username,password:password},
      success:function(response){
          if(response == 1){
                                    window.location = "index.php";
                                }else{
                                    msg = "Invalid username and password!";
                                }
        $("#message").html(response);
      }
    });
  });
});
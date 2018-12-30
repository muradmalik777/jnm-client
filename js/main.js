$("#userSignupForm").submit(function() {
  var formData = $("#userSignupForm").serialize();
  $.ajax({
    type: 'POST', // define the type of HTTP verb we want to use
    url: './user/queries/user_signup_query.php', // the url where we want to POST
    data: formData, // our data object
    success: function(response) {
      var resp = JSON.parse(response);
      if (resp["code"] == "1") {
        var message =
          '<div class="alert alert-success" role="alert">'+
          '<p>'+resp["message"]+
          '</div>';
        $("#userSignupForm").prepend(message);
      } else if (resp["code"] == "0") {
        var message =
          '<div class="alert alert-warning" role="alert">'+
          '<p>'+resp["message"]+
          '</div>';
        $("#userSignupForm").prepend(message);
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {
      console.log("error",thrownError);
    }
  });
  event.preventDefault();
});

//user login function
$("#userLoginForm").submit(function() {
  var formData = $("#userLoginForm").serialize();
  $.ajax({
    type: 'POST', // define the type of HTTP verb we want to use
    url: 'user/queries/user_login_query.php', // the url where we want to POST
    data: formData, // our data object
    success: function(response) {
      var resp = JSON.parse(response);
      if (resp["result"] == "1") {
        window.location.replace("user/purchase-boost.php");
      } else if (resp["result"] == "0") {
        var message =
          '<div class="message mt-20">'+
          '<p>'+resp["message"]+ " " + resp["date"] +'</p>'+
          '</div>';
        $("#userLoginForm").append(message);
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {

    }
  });
  event.preventDefault();
});

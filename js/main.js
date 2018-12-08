// user login sign-up starts
////////////////////////////
////////////////////////////
$("#userSignupForm").submit(function() {
  var formData = $("#userSignupForm").serialize();
  $.ajax({
    type: 'POST', // define the type of HTTP verb we want to use
    url: 'user/queries/user_signup_query.php', // the url where we want to POST
    data: formData, // our data object
    success: function(response) {
      var resp = JSON.parse(response);
      if (resp["result"] == "1") {
        var message =
          '<div class="message-success mt-20">'+
          '<p>'+resp["message"]+ " " + resp["date"] +'</p>'+
          '</div>';
        $(".signin-wrap").append(message);
      } else if (resp["result"] == "0") {
        var message =
          '<div class="message mt-20">'+
          '<p>'+resp["message"]+ " " + resp["date"] +'</p>'+
          '</div>';
        $(".signin-wrap").append(message);
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {

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

//user login sign-up ends
/////////////////////////

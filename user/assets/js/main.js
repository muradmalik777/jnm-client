$(document).ready(function() {

  //admin login function
  $("#resetPasswordForm").submit(function() {
    var formData = $("#resetPasswordForm").serialize();
    $.ajax({
      type: 'POST', // define the type of HTTP verb we want to use
      url: 'queries/reset_password_query.php', // the url where we want to POST
      data: formData, // our data object
      success: function(response) {
        var resp = JSON.parse(response);
        if (resp["result"] == "1") {
          var message =
            '<div class="alert alert-success font-14">' +
            resp["message"] + " " +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="mdi mdi-close font-18"></i></button>' +
            '</div>';
          $(".box").append(message);
        } else if (resp["result"] == "0") {
          var message =
            '<div class="alert alert-danger font-14">' +
            resp["message"] + " " +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="mdi mdi-close font-18"></i></button>' +
            '</div>';
          $(".box").append(message);
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert("error")
      }
    });
    event.preventDefault();
  });

  // //auto fill forms on button click
  // $(".select-button").click(function() {
  //   var row = $(this).closest("tr");
  //   var id = row.find("td:nth-child(1)").text();
  //   var name = row.find("td:nth-child(2)").text();
  //   var email = row.find("td:nth-child(3)").text();
  //   $(".form input[name=user_id]").val(id);
  //   $(".form input[name=name]").val(name);
  //   $(".form input[name=email]").val(email);
  // })
});

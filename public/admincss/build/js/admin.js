$( document ).ready(function() {

    $("#dashbord").click(function () {
      $.ajax({

             type: "GET",
             url:'dashbord',
             success: function (data) {
                 console.log(data);
             },
             error: function (data) {
                console.log(data);
             }
         });
    });
});

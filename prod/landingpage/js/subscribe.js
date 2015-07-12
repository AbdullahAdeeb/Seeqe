var insertSubscriber = function(){
    // get values from FORM
//    var name = $("#name").val();
    var name = "anonymous"; 
    var email = $("#email").val();
    console.log("name="+name+"   --   email="+email);
    if (name == "" || email == ""){ 
        console.warn('subscribe field is empty');
        $("#popheader").html("");
        $("#popbody").html("Please fill the field with your email then click the subscribe button.");
        $("#successmodel").click();
        return false; 
    }
    $.ajax({
        url:"/landingpage/subscribe.php",
        type:"POST",
        data:{name:name,email:email},
        success: function(result){
            if(!result){errorHandler(result);return;}
            console.log("Thank you for subscribing");
            
//          Enable button & show success message
            $("#btnSubmit").attr("disabled", false);
            $("#popheader").html("Thank you");
            $("#popbody").html("You have successfully subscribed, you'll hear from us soon.");
            $("#successmodel").click();
            
            //clear all fields
            $('form').trigger("reset");
        },
        error:function(err){
            console.log("Ops! something went wrong :(");
            errorHandler(err);

        }
    });   
    return true;
}
var popup = function(){
    //     Enable button & show success message
    $("#popheader").html("Request a Demo");
    $("#popbody").html("Please contact us at support@seeqe.com to request demo access.");
    $("#successmodel").click();
}

var errorHandler = function(err){
    console.log(err);
            // Fail message
            $("#popheader").html("Ops!");
            $("#popbody").html("Something went wrong and we were unable to subscribe you :( )");
            $("#successmodel").click();
    
           //clear all fields
            $('form').trigger("reset");
}
$(document).ready(function(){
   $('form').submit = function(event){
        insertSubscriber();  
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
   } 
   
});

//$(function() {
//
//    
//    $("input,textarea").jqBootstrapValidation({
//        preventSubmit: true,
//        submitError: function($form, event, errors) {
//            // additional error messages or events
//        },
//        submitSuccess: function($form, event) {
//            // Prevent spam click and default submit behaviour
//            $("#btnSubmit").attr("disabled", true);
//            event.preventDefault();
//            
//            // get values from FORM
//            var name = $("username").val();
//            var email = $("email").val();
//            var firstName = name; // For Success/Failure Message
//            // Check for white space in name for Success/Fail message
//            if (firstName.indexOf(' ') >= 0) {
//                firstName = name.split(' ').slice(0, -1).join(' ');
//            }
//            // add to database ? or just send an email? 
//            $.ajax({
//                url: "././mail/contact_me.php",
//                type: "POST",
//                data: {
//                    name: name,
//                    phone: phone,
//                    email: email,
//                    message: message
//                },
//                cache: false,
//                success: function() {
//                    // Enable button & show success message
//                    $("#btnSubmit").attr("disabled", false);
//                    $('#success').html("<div class='alert alert-success'>");
//                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
//                        .append("</button>");
//                    $('#success > .alert-success')
//                        .append("<strong>Your message has been sent. </strong>");
//                    $('#success > .alert-success')
//                        .append('</div>');
//
//                    //clear all fields
//                    $('#contactForm').trigger("reset");
//                },
//                error: function() {
//                    // Fail message
//                    $('#success').html("<div class='alert alert-danger'>");
//                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
//                        .append("</button>");
//                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
//                    $('#success > .alert-danger').append('</div>');
//                    //clear all fields
//                    $('#contactForm').trigger("reset");
//                },
//            })
//        },
//        filter: function() {
//            return $(this).is(":visible");
//        },
//    });
//
//    $("a[data-toggle=\"tab\"]").click(function(e) {
//        e.preventDefault();
//        $(this).tab("show");
//    });
//});

//// When clicking on Full hide fail/success boxes
//$('#name').focus(function() {
//    $('#success').html('');
//});

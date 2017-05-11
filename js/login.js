//stuff for user interface
//jQUery
//blah blah
//andreea e 0 :))

//hide the signup form and only display the login form
//swtich between them using the provided links
$('#signupForm').hide();
$('#loginCreateAccount').click(function() {
    $('#loginForm').hide(500);
    $('#signupForm').show(500);
});
$('#signupReturnToLogin').click(function() {
    $('#loginForm').show(500);
    $('#signupForm').hide(500);
});

//script that will hide every alert when the page is loaded
$('.alert').hide();

//script that runs when the log in buttton is clicked
$('#loginButton').click(function() {
    signIn();
});

//script that will run when the sing up button is clicked
$('#signupButton').click(function() {
    if ($('#signupPassword').val() == $('#signupRePassword').val()) {
        if (checkDetails()) {
            createAccount();
        } else {
            $('#signup_fillDetailsAlert').show(300);
        }
    } else {
        if (!checkDetails()) {
            $('#signup_fillDetailsAlert').show(300);
        }
        $('#signup_passwordAlert').show(300);
    }
});

//this function will close the alert that was displayed when the cross button is clicked
$('a.close').click(function() {
    $(this).parent().hide();
});

//make ENTER default button for login
$('#loginForm').keypress(function(e) {
    // body...
    if (e.keyCode == 13) {
        $('#loginButton').click();
    }
});


//make ENTER default button for signup
$('#signupForm').keypress(function(e) {
    // body...
    if (e.keyCode == 13) {
        $('#signupButton').click();
    }
});


//SIGN UP SCRIPT
//call this method when the user presses the sign up button and wants to create an account on the server
//verify if his passwords match and handle the process
//if they do call this method to begin the create account process
function createAccount() {
    //get the form into a json format
    var formString = $('#signupForm').serialize();
    //create an ajax connection with the database
    $.ajax({
        data: formString,
        type: 'post',
        url: '../php/createAccount.php',
        success: function(response) {
            //don't do anything
            //php will move the user to the next page in the structure
            if (response == "Error") {
                $('#signup_generalAlert').show(300);
            } else {
                window.location.href = '../php/main.php?userID=' + response;
            }
        },
        error: function(response) {
            //display an alert staiting that the singup information was wrong
            $('#signup_generalAlert').show(300);
        }
    });
}

//LOG IN SCRIPT
//call this method when the uer presses the login button and wants to signin in his web account
function signIn() {
    //convert the information from the login form into a json readeable data
    var loginData = $('#loginForm').serialize();
    //send the data to the database using jQuery and ajax
    $.ajax({
        data: loginData,
        type: 'post',
        url: '../php/signinScript.php',
        success: function(response) {
            //don't do anything
            //php will move the user to the desired webpage
            console.log("Success: " + response);
            if (response == "Error") {
                $('#login_emailAlert').show(400);
            } else {
                window.location.href = '../php/main.php?userID=' + response;
            }
        },
        error: function(response) {
            //display an alert staiting that the login information was wrong
            console.log("Error: " + response);
            $('#login_emailAlert').show(400);
        }
    });
}

//script to check if every detail has been filled
function checkDetails() {
    // if ($('#signupName').val() == null || $('#signupEmail').val() == null || $('#signupPassword').val() == null || $('#signupDoB').val() == null || $('#signupTitle').val() == null) {
    //     return false;
    // }
    // return true;
    var inputs = $('#signupForm').children();
    for (var i = 0; i < inputs.length; i++) {
        if ($(inputs[i]).is('input')) {
            if ($(inputs[i]).val() == null) {
                return false;
            }
        }
    }
    return true;
}
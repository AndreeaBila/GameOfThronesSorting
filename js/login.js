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
    //check if the two passwords match
    if ($('#signupPassword').val() == $('#signupRePassword').val()) {
        //verify if the server response is status 2xx
        //create email object
        var userEmail = {
            email: $('#signupEmail').val()
        };
        var result = false;
        //send the introduced email to the server to verify its uniqueness
        $.ajaxSetup({ async: false });
        $.ajax({
            data: userEmail,
            type: 'get',
            url: '../php/verifyUniqueEmail.php',
            success: function(response) {
                if (response == 0) {
                    $('#signup_generalAlert').show(300);
                    result = false;
                } else {
                    result = true;
                }
            },
            error: function(response) {
                //display an alert staiting that the singup information was wrong
                $('#signup_generalAlert').show(300);
                result = false;
            }
        });
        return result;
    } else {
        //inform the user that the thw passwords do not match
        $('#signup_passwordAlert').show(300);
        return false;
    }
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
            if (response == "Error") {
                $('#login_emailAlert').show(400);
            } else {
                //get the house id from the database
                $.getJSON('../php/getHouseID.php', function(data) {
                    var houseID = data;
                    if (houseID == 1) {
                        window.location.href = '../php/welcome';
                    } else {
                        window.location.href = '../php/main';
                    }
                });
            }
        },
        error: function(response) {
            //display an alert staiting that the login information was wrong
            $('#login_emailAlert').show(400);
        }
    });
}
//hide any alert by default when page loads
$('.alert').hide();

$(function() {
    var databaseEmail;
    //when an alert is closed
    $('.close').click(function() {
        $(this).parent().hide(500);
    });
    //get user information from the database
    $.getJSON("../php/getUserInfo.php", function(data) {
        databaseEmail = data.email;
        $("#settingsName").val(data.name);
        $("#settingsEmail").val(data.email);
        $("#settingsDob").val(data.dob);
        $("#settingsTitle").val(data.title);
    });

    //on save changes click
    $("#saveChanges").click(function() {
        if ($('#settingsPassword').val() == $('#settingsRePassword').val()) {
            updateInformation();
        } else {
            $('#signup_passwordAlert').show(500);
        }
    });

    //if the user presses enter while having form selected automatically submit the form
    $('.settings').keydown(function(e) {
        if (e.keyCode == 13) {
            $("#saveChanges").click();
        }
    });

    function updateInformation() {
        var userInfo = $('.settings').serialize();
        var userEmail = { email: $('#settingsEmail').val() };
        $.ajax({
            data: userEmail,
            type: "get",
            url: "../php/verifyUniqueEmail.php",
            success: function(data) {
                if (data == 0 || $('#settingsEmail').val() == databaseEmail) {
                    $.ajax({
                        data: userInfo,
                        type: "post",
                        url: "../php/changeUserSettings.php",
                        success: function(data) {
                            location.reload();
                        },
                        error: function(data) {

                        }
                    });
                } else {
                    $('#signup_generalAlert').show(500);
                }
            },
            error: function(data) {
                //error shit
            }
        });
    }
});
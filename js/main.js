$(function() {
    //get the house id from the database
    $.getJSON('../php/getHouseID.php', function(data) {
        var houseID = data;
        if (houseID == 1) {
            window.location.href = '../php/welcome.php';
        }
    });

    $('#btnSendRaven').click(function() {
        var post = $('#postsForm').serialize();
        //send post to database
        $.ajax({
            data: post,
            type: "get",
            url: "../php/insertPost.php",
            success: function(response) {
                console.log("Success: " + response);
            },
            error: function(response) {
                console.log("Error: " + response);
            }
        });
    });

    $('#openPostButton').click(function() {
        //get the posts from the database
        $.getJSON('../php/getPosts.php', function(data) {
            console.log(data);
        });
    });

    $('#sendRaven').hide();
    $('#sendRavenButton').click(function() {
    $('#sendRavenButton').hide(500);
    $('#ravenNetwork').hide(500);
    $('#sendRaven').show(500);
    });

    $('#returnToNetwork').click(function() {
    $('#sendRaven').hide(500);
    $('#ravenNetwork').show(500);
    $('#sendRavenButton').show(500);
    });
});
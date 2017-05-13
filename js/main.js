$(function() {
    //get the house id from the database
    $.getJSON('../php/getHouseID.php', function(data) {
        var houseID = data;
        if (houseID == 1) {
            window.location.href = '../php/welcome.php';
        }
    });

    updatePage();










    //Raven controls
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

function updatePage() {
    //retrieve the house object from the json file
    $.getJSON('../php/getHouseID.php', function(response) {
        $.getJSON('../js/mainPageContent.json', function(houses) {
            var userHouse;
            houses.array.forEach(function(element) {
                if (element.houseID == response) {
                    userHouse = element;
                }
            }, this);

            //update the page elements


        });
    });
}
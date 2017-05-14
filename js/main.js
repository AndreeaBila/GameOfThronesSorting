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
                //get the posts from the database
                location.reload();
            },
            error: function(response) {
                console.log("Error: " + response);
            }
        });
    });

    $('#openPostButton').click(function() {
        //get the posts from the database
        $.getJSON('../php/getPosts.php', function(data) {
            for (var i = data.length - 1; i >= 0; i--) {
                appendPost(data[i]);
            }
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
            //update sigils
            $('.sigil').attr("src", userHouse.iconPath);
            //update title and motto
            $('#addHouse').html(userHouse.houseTitle);
            $('#addWords').html(userHouse.motto);
            //change flag
            $('.flag').attr("src", userHouse.flagPath);
            //change family photo and text
            $('#familyPhoto').attr("src", userHouse.familyPath);
            $('#aboutFamily').html(userHouse.aboutFamily);
            //change home photo description
            $('#homePath').attr("src", userHouse.homePath);
            $('#aboutHome').html(userHouse.aboutHome);
            //change history desription
            $('#historyDescription').html(userHouse.historyDescription);
            //change house overview
            $('#houseOverview').html(userHouse.houseOverview);
        });
    });
}

//function neede toappend each post to the post forum
function appendPost(element) {
    $.ajax({
        data: element,
        type: "get",
        url: '../php/getCurrentUser.php',
        success: function(response) {
            var result = JSON.parse(response);
            createPost(element, result);
        },
        error: function(response) {

        }
    });
}

function createPost(element, response) {
    //add the main container for the post - well 
    $('.main-body').append('<div class="well" id="' + element.postID + '">');
    //add the footer
    $('#' + element.postID).append('<footer>');
    //add the <p> element to display the date that the post was created on
    $('#' + element.postID + ' footer').append('<p class="pull-right">' + element.dateCreated + '</p>');
    //add the h4 tag to display the user information
    $('#' + element.postID + ' footer').append('<h4>' + response.title + " " + response.name + " of House " + response.houseID + '</h4>');
    //add the <p> element for the tags
    $('#' + element.postID + ' footer').append('<p>' + element.title + '</p>');
    //close the footer
    $('#' + element.postID).append('</footer>');
    //add the space line <hr>
    $('#' + element.postID).append('<hr>');
    //add the <p> item to show the post content
    $('#' + element.postID).append('<p>' + element.content + '</p>');
    //close the main container well
    $('.main-body').append('</div>');
}

// async function requestNotification() {
//     //get the posts from the database
//     $('.main-body').empty();
//     $.getJSON('../php/getPosts.php', function(data) {
//         data.forEach(function(element) {
//             appendPost(element);
//         }, this);
//     });
//     await sleep(10000);
//     requestNotification();
// }

// function sleep(ms) {
//     return new Promise(resolve => setTimeout(resolve, ms));
// }

// requestNotification();
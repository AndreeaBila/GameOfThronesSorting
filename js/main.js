$(function() {
    $('[data-toggle="tooltip"]').tooltip();
    
    //get the house id from the database
    $.getJSON('../php/getHouseID.php', function(data) {
        var houseID = data;
        if (houseID == 1) {
            window.location.href = '../php/welcome';
        }
    });

    updatePage();


    requestNotification();

    //Raven controls
    $('#btnSendRaven').click(function() {
        var post = $('#postsForm').serialize();
        //send post to database
        $.ajax({
            data: post,
            type: "get",
            url: "../php/insertPost.php",
            success: function(response) {
                //get the posts from the database
                $('#returnToNetwork').click();
                requestNotification();
            },
            error: function(response) {}
        });
        $('input[type=text], textarea').val("");
        $('input[type=date]').val('');
    });

    $('#sendRaven').hide();
    $('#sendRavenButton').click(function() {
        $('#sendRavenButton').hide(350);
        $('#ravenNetwork').hide(350);
        $('#sendRaven').show(350);
    });

    $('#returnToNetwork').click(function() {
        $('#sendRaven').hide(350);
        $('#ravenNetwork').show(350);
        $('#sendRavenButton').show(350);
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
    $('#post-body').append('<div class="well" id="' + element.postID + '">');
    //add the footer
    $('#' + element.postID).append('<footer>');
    //add the <p> element to display the date that the post was created on
    $('#' + element.postID + ' footer').append('<p class="pull-right">' + element.dateCreated + '</p>');
    //add the h4 tag to display the user information
    if (response.houseID != "Night") {
        $('#' + element.postID + ' footer').append('<h4>' + response.title + " " + response.name + " of House " + response.houseID + '</h4>');
    } else {
        $('#' + element.postID + ' footer').append('<h4>' + response.title + " " + response.name + " of The Night's Watch </h4>");
    }
    //add the <p> element for the tags
    $('#' + element.postID + ' footer').append('<p>' + element.title + '</p>');
    //close the footer
    $('#' + element.postID).append('</footer>');
    //add the space line <hr>
    $('#' + element.postID).append('<hr>');
    //add the <p> item to show the post content
    $('#' + element.postID).append('<p>' + element.content + '</p>');
    //close the main container well
    $('#post-body').append('</div>');
}

async function requestNotification() {
    //get the posts from the database
    $.ajaxSetup({ async: false });
    $.getJSON('../php/getPosts.php', function(data) {
        var savedData = $('#numberOfPosts').val();
        if (savedData < data.length) {
            $('#post-body').empty();
            data.forEach(function(element) {
                appendPost(element);
            }, this);
        }
    });
    $.ajaxSetup({ async: true });
    await sleep(10000);
    requestNotification();
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
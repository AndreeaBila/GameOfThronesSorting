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
function appendPost(element, type) {
    $.ajax({
        data: element,
        type: "get",
        url: '../php/getCurrentUser.php',
        success: function(response) {
            var result = JSON.parse(response);
            createPost(element, result, type);
        },
        error: function(response) {

        }
    });
}

function createPost(element, response, type) {
    if (response.houseID != 'Night') {
        var text = response.title + " " + response.name + " of House " + response.houseID;
    } else {
        var text = response.title + " " + response.name + " of The Night's Watch";
    }

    if (type == 'append') {
        $('#post-body').append(
            $('<div/>')
            .attr('id', element.postID)
            .addClass('well')
            .append(
                $('<footer/>')
                .append(
                    $('<p/>')
                    .addClass('pull-right')
                    .text(element.dateCreated)
                )
                .append(
                    $('<h4/>')
                    .text(text)
                )
                .append(
                    $('<p/>')
                    .text(element.title)
                )
            )
            .append(
                $('<hr>')
            )
            .append(
                $('<p/>')
                .text(element.content)
                .addClass('scrollable')
            )
        );
    } else if (type == 'prepend') {
        $('#post-body').prepend(
            $('<div/>')
            .attr('id', element.postID)
            .addClass('well')
            .append(
                $('<footer/>')
                .append(
                    $('<p/>')
                    .addClass('pull-right')
                    .text(element.dateCreated)
                )
                .append(
                    $('<h4/>')
                    .text(text)
                )
                .append(
                    $('<p/>')
                    .text(element.title)
                )
            )
            .append(
                $('<hr>')
            )
            .append(
                $('<p/>')
                .text(element.content)
                .addClass('scrollable')
            )
        );
    }
}

async function requestNotification() {
    //get the number of posts from the database and check if there are any new posts
    $.getJSON('../php/getNumberOfPosts.php', function(number) {
        if (number > $('#numberOfPosts').val()) {
            //a new post has been added
            //get the number of new posts
            var dif = { number: number - $('#numberOfPosts').val() };
            $.ajax({
                data: dif,
                type: 'get',
                url: '../php/getPosts.php',
                success: function(response) {
                    var data = JSON.parse(response);
                    if ($('#numberOfPosts').val() == 0) {
                        var type = 'append';
                    } else {
                        var type = 'prepend';
                    }
                    $('#numberOfPosts').val(data.length + parseInt($('#numberOfPosts').val()));
                    for (var i = 0; i < data.length; i++) {
                        appendPost(data[i], type);
                    }
                }
            });
        }
    });
    await sleep(5000);
    requestNotification();
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

$('.alert').hide();
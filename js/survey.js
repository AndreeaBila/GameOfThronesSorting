var house = {
    lannister: 0,
    stark: 0,
    night: 0,
    martell: 0,
    targaryen: 0,
    baratheon: 0
};

$(function() {
    //constrol for the radio buttons on click event
    $('#option1').click(radio1);
    $('#option2').click(radio2);
    $('#option3').click(radio3);

    //extract the survey questions
    $.getJSON('../js/surveyQuestions.json', function(data) {
        var array = data.questionArray;
        //global index for the array
        var i = 0;
        surveyLoop(array, i);
        //listen for the click event of the submit button and make a recursiove call to the surveyLoop method
        $('#submit').click(function() {
            var checkAny = false;
            if ($('#option1').prop("checked")) {
                var optionHouse = array[i].option_1.house;
                chooseHouse(optionHouse);
                checkAny = true;
            } else if ($('#option2').prop("checked")) {
                var optionHouse = array[i].option_2.house;
                chooseHouse(optionHouse);
                checkAny = true;
            } else if ($('#option3').prop("checked")) {
                var optionHouse = array[i].option_3.house;
                chooseHouse(optionHouse);
                checkAny = true;
            }
            $('.fa-circle').css('color', 'white');
            $('input').prop("checked", false);
            if (checkAny) {
                surveyLoop(array, ++i);
            }
        });
    });
});

// RADIO CONTROLS
function radio(x, y, z) {
    if (document.getElementById('option' + x).checked) {
        document.getElementById('icon' + x).style.color = "#8C3F49";
        document.getElementById('icon' + y).style.color = "white";
        document.getElementById('icon' + z).style.color = "white";
    }
}

function radio1() {
    radio(1, 2, 3);
}

function radio2() {
    radio(2, 1, 3);
}

function radio3() {
    radio(3, 1, 2);
}

//method that will perform the survey operations
function surveyLoop(array, i) {
    if (i < array.length) {
        $('#question').html(array[i].question);
        $('#answear1').text(array[i].option_1.answear);
        $('#answear2').text(array[i].option_2.answear);
        $('#answear3').text(array[i].option_3.answear);

        $('.question-section').css({ backgroundImage: array[i].backgroundImage });
        $('.answear-section').css({ backgroundColor: array[i].backgroundColor });
    } else {
        //calculate house score
        //change page
        calculateScore();
    }
}

function chooseHouse(optionHouse) {
    switch (optionHouse) {
        case "Lannister":
            house.lannister++;
            break;
        case "Baratheon":
            house.baratheon++;
            break;
        case "Stark":
            house.stark++;
            break;
        case "Martell":
            house.martell++;
            break;
        case "Night":
            house.night++;
            break;
        case "Targaryen":
            house.targaryen++;
            break;
    }
}

function calculateScore() {
    //get max value from house
    var scores = [h = {
            count: house.lannister,
            name: "Lannister",
        },
        h = {
            count: house.stark,
            name: "Stark",
        },
        h = {
            count: house.targaryen,
            name: "Targaryen",
        },
        h = {
            count: house.baratheon,
            name: "Baratheon",
        },
        h = {
            count: house.night,
            name: "Night",
        },
        h = {
            count: house.martell,
            name: "Martell",
        }
    ];

    var max = scores[0].count;
    for (var i = 1; i < scores.length; i++) {
        if (scores[i].count > max) {
            max = scores[i].count;
        }
    }
    var top = new Array();
    for (var i = 0; i < scores.length; i++) {
        if (scores[i].count == max) {
            top.push(i);
        }
    }
    var item = top[Math.floor(Math.random() * top.length)];
    item = scores[item];
    $.ajax({
        data: item,
        type: 'get',
        url: "../php/createHouseConnection.php",
        success: function(response) {
            window.location.href = '../php/sortingSuccess';
        },
        error: function(response) {

        }
    });
}
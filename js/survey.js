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
            if (checkAny) {
                surveyLoop(array, ++i);
            }
        });
    });
});

// RADIO CONTROLS
function radio(x, y, z) {
    if (document.getElementById('option' + x).checked) {
        document.getElementById('icon' + x).style.color = "#B47C67";
        document.getElementById('icon' + y).style.color = "#E5DFD2";
        document.getElementById('icon' + z).style.color = "#E5DFD2";
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
    if (i <= array.length) {
        $('#question').html(array[i].question);
        $('#icon1').text(array[i].option_1.answear);
        $('#icon2').text(array[i].option_2.answear);
        $('#icon3').text(array[i].option_3.answear);

        console.log(house);
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
        default:
            console.log("Error");
    }
}
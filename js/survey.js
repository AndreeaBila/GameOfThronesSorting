$(function() {
    $('#option1').click(radio1);
    $('#option2').click(radio2);
    $('#option3').click(radio3);
});

// RADIO CONTROLS
function radio(x, y, z) {
    if(document.getElementById('option'+x).checked){
        document.getElementById('icon'+x).style.color = "#B47C67";
        document.getElementById('icon'+y).style.color = "#E5DFD2";
        document.getElementById('icon'+z).style.color = "#E5DFD2"; 
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
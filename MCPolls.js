window.onload = function () {
    document.getElementById("valButton").onclick = addValues;
    document.getElementById("clearButton").onclick = clear;
    document.getElementById("test").onclick = vote;
}

function addValues() {

    var values = ["val1", "val2", "val3", "val4", "val5", "val6", "val7", "val8", "val9", "val10"];
    var count = (document.getElementById("valCount")).value;
    if (count > 0 && count <= 10) {
        for (var i = 0; i < count; i++) {
            var value = document.getElementById(values[i]);
            value.style.display = "inline";
            value.innerHTML = "Value "+(i + 1);
            var title = document.getElementById(values[i]+"Input");
            title.style.display = "inline";
        }
    }
}

function clear() {
    var values = ["val1", "val2", "val3", "val4", "val5", "val6", "val7", "val8", "val9", "val10"];
        for (var i = 0; i < values.length; i++) {
        var value = document.getElementById(values[i]);
        value.style.display = "none";
        var title = document.getElementById(values[i] + "Input");
        title.style.display = "none";
    }
}

function vote(voter, id) {
    alert("voter and ID");
}

function vote(voter) {
    alert("voter");
}

function vote() {
    alert("nothing");
}

function clickMe() {
    //alert("Hello World!");
    var output = document.getElementById("output");
    //output.style.color = "red";
    //output.style.backgroundColor = "yellow";
    output.className = "highlighted";
    output.innerHTML = "Hello World!";


    //var result = confirm("Are you sure you want to proceed?")

    //if (result)
    //output.innerHTML = "Awesome!"
    //else
    //output.innerHTML = "Damn that sucks!"

    //var wish = prompt("Make a wish");
    //output.innerHTML = wish + ". Consider it done!";
}

function compute() {
    var val1 = document.getElementById("val1");
    var val2 = document.getElementById("val2");
    var answer = document.getElementById("answer");
    answer.innerHTML = parseInt(val1.value) + parseInt(val2.value);
}
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
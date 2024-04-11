function haldleInput() {
    var xmlhttp = new XMLHttpRequest();
    var password = document.getElementById("password").value;
    xmlhttp.open("GET", "pr6.php?q=" + password, true);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
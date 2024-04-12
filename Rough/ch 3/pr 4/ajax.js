function showdata() {
    // instance
    var xmlhttp = new XMLHttpRequest();

    // get datta
    var str = document.getElementById("technology").value;

    // open method
    xmlhttp.open("GET", "pr4.php?q=" + str, true);

    // method call
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
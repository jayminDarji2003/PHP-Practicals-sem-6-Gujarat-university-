function showdata() {
    // reate instance of XMLHttpRequest
    var xmlhttp = new XMLHttpRequest();
    // fetching the data
    var tech = document.getElementById("technology").value;
    // open method
    xmlhttp.open('GET', "pr4.php?q=" + tech, true);

    // function
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
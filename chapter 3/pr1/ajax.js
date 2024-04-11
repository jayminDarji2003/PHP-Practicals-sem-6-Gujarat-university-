function showdata() {
    // creating a instance of XMLHttpRequest
    var xmlhttp = new XMLHttpRequest();
    // get the data of the input element
    var str = document.getElementById("textname").value;
    // send GET request and send data.
    xmlhttp.open("GET", "pr1.php?q=" + str, true);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
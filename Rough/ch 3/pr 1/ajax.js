function showdata() {
    // create instance
    var xmlhttp = new XMLHttpRequest();

    // fetch data
    var str = document.getElementById("text").value;

    // call open method
    xmlhttp.open("GET", "pr1.php?q=" + str, true);

    // call function
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
function showdata() {
    // create instance of XMLHttpRequest object
    var xmlhttp = new XMLHttpRequest();

    // get the data of input
    var str = document.getElementById("inputtext").value;
    
    // open method
    xmlhttp.open("GET", "pr3.php?q=" + str, true);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            confirm("Do you really want to convert to uppercase?");
            document.getElementById("resulttext").value = xmlhttp.responseText.toUpperCase();
        }
    }

    xmlhttp.send();
}
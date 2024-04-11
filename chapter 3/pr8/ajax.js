function handleInput() {
    console.log("clicked");
    var xmlhttp = new XMLHttpRequest();
    var id = document.getElementById("searchid").value;
    xmlhttp.open("GET", "pr8.php?id=" + id, true);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
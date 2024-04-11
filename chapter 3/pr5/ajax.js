function getselecteditems() {

    // var xmlhttp;
    // if (window.XMLHttpRequest) {
    //     xmlhttp = new XMLHttpRequest();
    // }

    var xmlhttp = new XMLHttpRequest;
    var data = document.getElementsByName("product");
    var product = [];

    for (let i = 0; i < data.length; i++) {
        if (data[i].checked == true) {
            product.push(data[i].value);
        }
    }
    let info = document.getElementById("info")

    for (let i = 0; i < product.length; i++) {
        info.innerHTML += product[i] + " ";
    }

    xmlhttp.open("GET", "pr5.php?checkselect=" + product, true);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readystate == 4 && xmlhttp.status == 200) {
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
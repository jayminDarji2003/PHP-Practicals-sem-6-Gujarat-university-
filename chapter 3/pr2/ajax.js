function showdata(){
    // create instance of XMLHttpRequest
    var xmlhttp = new XMLHttpRequest();
    // get the input data
    var str = document.getElementById("inputText").value;
    // open request method
    xmlhttp.open("GET", "pr2.php?q="+str,true);

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById("info").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.send();
}
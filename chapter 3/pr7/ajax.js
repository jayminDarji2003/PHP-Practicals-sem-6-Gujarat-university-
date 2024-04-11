function handleEmail() {
    var email = document.getElementById("email").value;
    // console.log(email);
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        document.getElementById("info").innerHTML = "valid email"
    } else {
        document.getElementById("info").innerHTML = "Invalid email"
    }
}
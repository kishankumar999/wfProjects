function phpMailerToggle(event) {

    // let checkbox = document.getElementById("phpMailerCheck").value;

    if (event.target.checked) {
        document.getElementById("phpMailerTogglePanel").innerHTML = "Yes";
    } else {
        document.getElementById("phpMailerTogglePanel").innerHTML = "No";
    }
}
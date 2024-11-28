/* DASHBOARD - TOGGLE/DROPDOWN */
function dropdownBtn() {
    let showDropdown = document.getElementById("dropdown-toggle-show");

    if (showDropdown.style.display === "none") {
        showDropdown.style.display = "block";
    } else {
        showDropdown.style.display = "none";
    }
}

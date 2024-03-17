var popup = document.getElementById("overlay");
var popup2 = document.getElementById("overlay2");

function openPopup() {
    popup.style.display = "block";
}

function openPopup2(employeeId) {
    document.getElementById("employee_id").value = employeeId;
    popup2.style.display = "block";
}

function closePopup() {
    popup.style.display = "none";
    popup2.style.display = "none";
}

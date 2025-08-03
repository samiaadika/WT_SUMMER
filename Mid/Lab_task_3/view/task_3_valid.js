document.getElementById("donationForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var firstName = document.getElementById("firstName").value.trim();
    var lastName = document.getElementById("lastName").value.trim();
    var phone = document.getElementById("phone").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var amount = document.querySelector('input[name="amount"]:checked');
    var state = document.getElementById("state").value;

    if (firstName === "" || lastName === "" || phone === "" || email === "" || password === "" || confirmPassword === "" || !amount || state === "") {
        alert("Please fill in all required fields.");
        return;
    }

    if (!/^\d{11}$/.test(phone)) {
        alert("Phone must be exactly 11 digits.");
        return;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters.");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return;
    }

    alert("Form submitted successfully!\nThank you for your donation.");
});

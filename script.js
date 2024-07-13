document.addEventListener("DOMContentLoaded", function() {
    // Form validation
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if (name === "" || email === "" || message === "") {
            alert("Please fill in all required fields.");
            event.preventDefault();
        }
    });

    document.getElementById('newsletterForm').addEventListener('submit', function(event) {
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;
        const emailNewsletter = document.getElementById('emailNewsletter').value;

        if (firstName === "" || lastName === "" || emailNewsletter === "") {
            alert("Please fill in all required fields.");
            event.preventDefault();
        }
    });
});
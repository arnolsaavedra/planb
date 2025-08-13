<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application for Plan B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="css.css" rel="stylesheet">
  
</head>
<body>

    <header class="hero">
        <div class="container">
            <div>
            <div class="logo_css"><a href="/" id="logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 111"><g fill="none" fill-rule="evenodd"><g fill-rule="nonzero"><g fill="#FFF"><path d="M0 104h2.31c.55 0 .97.13 1.25.4s.43.64.43 1.14c0 .3-.05.55-.16.75-.11.2-.27.37-.5.5.22.04.41.11.57.19.16.09.28.19.38.32.1.13.17.27.21.43.04.16.06.33.06.51 0 .28-.05.53-.15.74-.1.22-.24.4-.41.55-.18.15-.39.26-.65.33-.25.07-.54.11-.86.11H0V104Zm1.55 2.35h.29c.49 0 .73-.19.73-.58 0-.39-.24-.58-.73-.58h-.29v1.16Zm0 2.42h.34c.39 0 .67-.05.84-.15.17-.1.25-.26.25-.48 0-.22-.08-.38-.25-.48-.17-.1-.45-.15-.84-.15h-.34v1.26ZM9.34 105.32H7.5v1h1.74v1.31H7.5v1.03h1.85v1.32h-3.4V104h3.4v1.32zM12.36 107.11 10.18 104h1.85l1.11 1.63 1.1-1.63h1.85l-2.19 3.11v2.87h-1.55v-2.87zM16.41 106.99c0-.44.08-.86.25-1.24.16-.38.39-.72.68-1 .29-.29.64-.51 1.04-.67.4-.16.85-.24 1.33-.24.48 0 .92.08 1.33.24.41.16.76.38 1.05.67.29.29.52.62.69 1 .16.38.25.8.25 1.24 0 .44-.08.86-.25 1.24-.16.38-.39.72-.69 1-.3.28-.64.51-1.05.67-.41.16-.85.24-1.33.24-.49 0-.93-.08-1.33-.24-.4-.16-.75-.38-1.04-.67-.29-.29-.52-.62-.68-1-.17-.38-.25-.8-.25-1.24Zm1.62 0a1.588 1.588 0 0 0 .49 1.18c.15.15.33.26.54.34.2.08.42.12.65.12.23 0 .44-.04.65-.12.2-.08.38-.2.54-.34.16-.15.28-.32.37-.52.09-.2.13-.42.13-.66 0-.24-.04-.46-.13-.66s-.21-.38-.37-.52c-.16-.15-.33-.26-.54-.34-.2-.08-.42-.12-.65-.12-.23 0-.44.04-.65.12-.2.08-.38.2-.54.34-.16.14-.27.32-.36.52-.09.2-.13.42-.13.66ZM24.47 109.98V104h1.55l2.87 3.65V104h1.54v5.97h-1.54l-2.87-3.65v3.65h-1.55zM32.13 104h2.3c.41 0 .79.08 1.14.25.36.16.67.38.93.65.27.27.48.59.63.95a2.926 2.926 0 0 1 0 2.27c-.15.36-.36.68-.63.95-.27.27-.58.49-.93.66-.35.17-.74.25-1.15.25h-2.3V104h.01Zm1.56 4.66h.36c.27 0 .51-.04.72-.13.21-.08.39-.2.54-.35.15-.15.26-.32.33-.53.08-.2.11-.43.11-.67 0-.24-.04-.46-.12-.67-.08-.21-.19-.38-.34-.53-.15-.15-.32-.26-.54-.35-.21-.08-.45-.13-.71-.13h-.36v3.36h.01Z"></path></g><g fill="#BABCBD"><path d="M45.64 108.94h-2.22l-.36 1.04H41.4l2.27-5.97h1.7l2.27 5.97H46l-.36-1.04Zm-.41-1.18-.7-1.99-.7 1.99h1.4Zm3.74-3.76h2.3c.41 0 .79.08 1.14.25.36.16.67.38.93.65.27.27.48.59.63.95a2.926 2.926 0 0 1 0 2.27c-.15.36-.36.68-.63.95-.27.27-.58.49-.93.66-.35.17-.74.25-1.15.25h-2.3V104h.01Zm1.55 4.66h.36c.27 0 .51-.04.72-.13.21-.08.39-.2.54-.35.15-.15.26-.32.33-.53.08-.2.11-.43.11-.67 0-.24-.04-.46-.12-.67-.08-.21-.19-.38-.34-.53-.15-.15-.32-.26-.54-.35-.21-.08-.45-.13-.71-.13h-.36v3.36h.01ZM56.59 104l1.44 3.64 1.45-3.64h1.69l-2.52 5.97h-1.24L54.9 104zM65.83 105.32h-1.85v1h1.74v1.31h-1.74v1.03h1.85v1.32h-3.4V104h3.4zM72.55 109.98h-1.93l-1.48-2.3v2.3h-1.55V104H70c.33 0 .62.05.87.15a1.618 1.618 0 0 1 .97.99c.08.23.12.46.12.71 0 .45-.11.82-.33 1.11-.22.28-.54.47-.97.57l1.89 2.45Zm-3.42-3.31h.29c.31 0 .54-.06.71-.19.16-.13.25-.31.25-.55 0-.24-.08-.42-.25-.55-.16-.13-.4-.19-.71-.19h-.29v1.48ZM76.1 105.32v4.66h-1.55v-4.66h-1.28V104h4.1v1.31H76.1zM80.25 104v5.97H78.7V104zM85.41 105.53a1.7 1.7 0 0 0-.51-.3c-.17-.07-.33-.1-.49-.1-.2 0-.36.05-.49.14a.43.43 0 0 0-.19.37c0 .11.03.19.09.26s.15.13.25.18c.1.05.22.09.35.13.13.04.26.08.38.12.51.17.88.4 1.11.68.24.28.35.65.35 1.11 0 .31-.05.58-.15.83-.1.25-.25.46-.45.64s-.44.31-.73.41c-.29.1-.61.15-.98.15-.75 0-1.46-.22-2.1-.67l.67-1.25c.23.21.46.36.69.46.23.1.45.15.67.15.25 0 .44-.06.57-.17a.51.51 0 0 0 .19-.4c0-.09-.02-.17-.05-.23a.39.39 0 0 0-.16-.18.874.874 0 0 0-.29-.15c-.12-.05-.26-.1-.43-.16-.2-.06-.4-.13-.59-.21-.19-.08-.36-.18-.51-.31-.15-.13-.27-.29-.36-.48-.09-.19-.14-.44-.14-.73s.05-.56.15-.8c.1-.24.23-.45.41-.62.18-.17.39-.3.65-.4.26-.1.54-.14.86-.14a4.066 4.066 0 0 1 1.86.48l-.63 1.19ZM89.44 104v5.97h-1.55V104zM91.32 109.98V104h1.55l2.87 3.65V104h1.54v5.97h-1.54l-2.87-3.65v3.65h-1.55zM102.19 106.63h3.08c0 .32-.01.6-.04.86s-.08.5-.16.72c-.11.31-.26.59-.45.83s-.41.44-.67.6c-.26.16-.54.28-.84.37-.31.08-.63.13-.97.13-.46 0-.89-.08-1.27-.23a2.89 2.89 0 0 1-.99-.65c-.28-.28-.49-.61-.64-1-.15-.39-.23-.82-.23-1.29 0-.46.08-.89.23-1.28.15-.39.37-.72.64-.99.28-.27.61-.49 1-.64.39-.15.83-.23 1.31-.23.62 0 1.17.13 1.64.4s.84.69 1.12 1.25l-1.47.61c-.14-.33-.32-.56-.54-.71-.22-.15-.47-.21-.75-.21-.23 0-.44.04-.63.13s-.35.21-.49.37-.24.35-.32.58c-.08.23-.12.48-.12.76 0 .25.03.49.1.71.07.22.17.4.3.56.13.16.3.28.49.37.2.09.42.13.68.13.15 0 .3-.02.44-.05.14-.03.27-.09.38-.17.11-.08.21-.18.28-.3.07-.12.12-.27.15-.44h-1.28v-1.19h.02Z"></path></g></g><g fill="#FFF"><path fill-rule="nonzero" d="M52.61 0C64.37 0 75.1 4.47 83.17 11.81c9.14 8.31 14.88 20.3 14.88 33.63 0 13.32-5.73 25.3-14.86 33.61-8.08 7.35-18.81 11.83-30.59 11.83-13.07 0-24.86-5.52-33.15-14.36C11.83 68.4 7.16 57.46 7.16 45.44c0-13.05 5.51-24.82 14.32-33.11C29.62 4.68 40.56 0 52.61 0Zm8.95 21.45h-18.8v48.78H63c5.98 0 10.57-1.9 13.19-4.61 1.82-1.83 3.57-4.97 3.57-9.58 0-3.88-1.31-7.02-3.27-8.92-1.53-1.47-4.08-2.63-6.63-2.93 1.82-.81 2.92-1.9 3.94-3.8 1.02-2.05 1.39-3.88 1.39-6 0-4.32-1.31-7.31-2.99-9.14-2.99-3.29-7.14-3.8-10.64-3.8ZM30.68 59.77c-1.16 0-2.31.21-3.34 1.28-1.01 1.05-1.24 2.29-1.24 3.49v5.69h13.76v-3.57H35.3v-2.25c0-1.07-.14-2.35-1.2-3.42-1.05-1.07-2.33-1.22-3.42-1.22Zm1.3 4.18c.39.43.43 1.13.43 1.5v1.21h-3.42v-1.22c0-.45.06-1.11.49-1.53.37-.37.87-.41 1.24-.41.33 0 .89.02 1.26.45Zm33.79-12.23c.73.73 1.24 1.98 1.24 3.51 0 1.39-.44 2.49-1.02 3.15-1.38 1.61-4.3 1.98-7.8 1.98h-2.84V50.11h2.62c3.13 0 6.27.07 7.8 1.61Zm-25.91-.89h-3.03v4.29H26.1v3.57h13.76v-7.86Zm0-14.9L26.1 41.11v3.9l13.76 5.28v-3.77l-2.31-.93V40.6l2.31-.85v-3.82Zm-5.03 5.61v3.05l-4.46-1.5 4.46-1.55Zm22.85-10.37c2.48 0 4.01.66 4.81 1.46.73.81 1.17 2.05 1.17 3.29 0 1.1-.37 2.41-1.17 3.22-1.31 1.39-3.5 1.54-4.81 1.54h-2.33v-9.51h2.33Zm-17.82-9.72H26.1v3.56h8.42L26.1 31.6v3.56h13.76V31.6h-8.42l8.42-6.59v-3.56Z"></path><path d="m93.2 0 1.51 3.66L96.29 0h.8l.96 5.76h-1.13l-.51-3.55-1.53 3.55h-.37l-1.46-3.55-.59 3.55h-1.12L92.4 0zM90.93 0v.97h-1.28v4.79h-1.11V.97h-1.29V0z"></path></g></g></svg></a></div>
            </div>
            <h1 class="display-4">Hello, Plan B.</h1>
            <p class="lead">I'm the Back-End Developer you're looking for. Ready to deliver high-impact digital solutions and grow with your talented team.</p>
        </div>
    </header>
    
    

    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Proven Skills</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-3">Required Skills</h4>
                    <ul class="skills-list">
                        <li>PHP/MySQL</li>
                        <li>Javascript</li>
                        <li>Custom API’s (CRM, cloud-based media management)</li>
                        <li>MAMP/Local setup proficiency (multiple PHP versions)</li>
                        <li>WordPress development (custom templates/post types/plugins)</li>
                        <li>WP Woocommerce & Payment Gateways (Paypal/Stripe)</li>
                        <li>Responsive, cross-browser compatible websites</li>
                        <li>WordPress backend/theme development</li>
                        <li>PHP dependency managers (Composer)</li>
                        <li>SASS and CSS/JS compiling tools (Gulp.js)</li>
                        <li>Version control (GIT, Subversion)</li>
                        <li>Photoshop/Sketch for asset exporting</li>
                        <li>Google Tag Manager custom tags via JS</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Additional Skills</h4>
                    <ul class="skills-list">
                        <li>Custom WordPress plugin development</li>
                        <li>Cordova/PhoneGap/Ionic iPad App Development</li>
                        <li>Magento (template/stylesheet editing)</li>
                        <li>Experience with CRM tools (Hubspot, Pardot, Salesforce)</li>
                        <li>Custom HTML email development</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-container">
                        <h2 class="text-center mb-3">Interested?</h2>
                        <p class="text-center mb-4">If you find my profile interesting, please leave your contact information. By submitting, you confirm you've found the candidate you need.</p>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Confirm Interest and Submit</button>
                            </div>
                        </form>
                        <div id="form-feedback" class="mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <p>&copy; 2025 - Crafted with dedication for Plan B.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const form = event.target;
        const feedbackDiv = document.getElementById('form-feedback');
        const submitButton = form.querySelector('button[type="submit"]');

        // Disable button to prevent multiple submissions
        submitButton.disabled = true;
        submitButton.innerHTML = 'Processing...';
        feedbackDiv.innerHTML = '';

        // Create a FormData object to send the form's data
        const formData = new FormData(form);

        // Perform the fetch call to the PHP script
        fetch('controller/send-email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Expect a JSON response
        .then(data => {
            if (data.success) {
                // Success
                feedbackDiv.innerHTML = `
                    <div class="alert alert-success">
                        <strong>Thank you, ${form.name.value}!</strong> Your confirmation has been received and the team has been notified.
                    </div>
                `;
                form.reset();
            } else {
                // Failure
                feedbackDiv.innerHTML = `
                    <div class="alert alert-danger">
                        <strong>Error:</strong> ${data.message}
                    </div>
                `;
            }
        })
        .catch(error => {
            // Network or server error
            console.error('Error:', error);
            feedbackDiv.innerHTML = `
                <div class="alert alert-danger">
                    There was a problem with the connection. Please try again later.
                </div>
            `;
        })
        .finally(() => {
            // Re-enable the button
            submitButton.disabled = false;
            submitButton.innerHTML = 'Confirm Interest and Submit';
        });
    });
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
        }
        input, textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        .social-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        .social-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .social-button:hover {
            background-color: #555;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form id="contact-form" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <div class="error-message" id="name-error"></div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <div class="error-message" id="email-error"></div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <div class="error-message" id="message-error"></div>
            <input type="submit" value="Send Message">
        </form>
        <div class="social-buttons">
            <a href="https://twitter.com/your-twitter-handle" target="_blank" class="social-button">Twitter</a>
            <a href="https://wa.me/your-whatsapp-number" target="_blank" class="social-button">WhatsApp</a>
            <a href="https://www.snapchat.com/add/your-snapchat-username" target="_blank" class="social-button">Snapchat</a>
        </div>
    </div>
    <script>
        function validateForm() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let message = document.getElementById("message").value;
            let nameError = document.getElementById("name-error");
            let emailError = document.getElementById("email-error");
            let messageError = document.getElementById("message-error");

            if (name == "") {
                nameError.textContent = "Name is required.";
                return false;
            } else {
                nameError.textContent = "";
            }

            if (email == "" || !validateEmail(email)) {
                emailError.textContent = "Valid email is required.";
                return false;
            } else {
                emailError.textContent = "";
            }

            if (message == "") {
                messageError.textContent = "Message is required.";
                return false;
            } else {
                messageError.textContent = "";
            }

            return true;
        }

        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
    </script>
</body>
</html>
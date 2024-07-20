<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/cropped-maison-margiela-favicon-32x32.png">
    <title>Maison Margiela</title>
    <style>
        body {
            font-family: Courier, monospace;
            text-align: center;
            background-color: #ffffff;
            color: #000000;
        }
        .container {
            margin: 0 auto;
            padding: 20px;
            max-width: 900px;
        }
        .header {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .subheader {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .image-container {
            margin: 20px 0;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .text {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .signup {
            font-size: 16px;
            font-weight: bold;
        }
        .form-container {
            text-align: left;
            margin: 20px 0;
            display: flex;
            justify-content: center;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input, .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            font-family: Courier, monospace;
            font-size: 14px;
        }
        .form-container select {
            width: 32%;
            display: inline-block;
            margin-right: 1%;
        }
        .form-container select:last-of-type {
            margin-right: 0;
        }
        .form-container p {
            font-size: 12px;
        }
        .submit-button {
            display: inline-block;
            background-color: #000000;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            font-family: Courier, monospace;
            cursor: pointer;
            text-decoration: none;
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- <h1 class="header">Maison Margiela</h1> -->
        <div class="image-container">
            <img src="imgs/maison-margiela-logo-250x52.png" alt="Maison Margiela">
        </div>
        <h2 class="subheader">The Scents Your Memories Are Made of</h2>
        <div class="image-container">
            <img src="imgs/maison-margiela-thank-you-banner-02-1024x576.jpg" alt="Maison Margiela">
        </div>
        <p class="text">
            To redeem your 2 x Maison Margiela 1.2ml vials, simply present this page to our Brand Ambassadors at any Maison Margiela boutiques in Singapore by 31st July.
        </p>
        <p class="signup">
            Sign up below to redeem your complimentary samples
        </p>
        <div class="form-container">
            <div style="max-width:500px !important;">
                <form action="insert.php" method="POST">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                    
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="phone">Mobile Number:</label>
                    <input type="text" id="phone" name="phone" required placeholder="+66" maxlength="10">
                    
                    <label for="birthday">Birthday:</label>
                    <select id="month" name="month" required>
                        <option value="" disabled selected>Month</option>
                        <!-- Add month options here -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">12</option>
                        <option value="12">12</option>
                    </select>
                    <select id="day" name="day" required>
                        <option value="" disabled selected>Day</option>
                        <!-- Add day options here -->
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>

                    <select id="year" name="year" required>
                        <option value="" disabled selected>Year</option>
                        <!-- Add year options here -->
                        <?php
                        $currentYear = date("Y");
                        for ($i = $currentYear; $i >= $currentYear - 40; $i--) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                    
                    <p>
                        By submitting this form, I understand and expressly consent that any personal data which I have provided may be processed by Maison Margiela Fragrances for marketing purposes.
                    </p>
                    
                    <button type="submit" class="submit-button">SUBMIT</button>
                </form>
            </div>
        </div>
       
        <br>

        <h2 class="subheader">Discover The Scents In-store</h2>
        <div class="image-container">
            <img src="imgs/maison-margiela-banner-02.jpg" alt="Maison Margiela">
        </div>

        <p>
            Maison Margiela Gaysorn Amarin <br>
            496 502 Phloen Chit Rd, Lumphini, Pathum Wan, <br>
            Bangkok 10330 
        </p>
        <br>
        <p>
            Maison Margiela Emquatier <br>
            695 Sukhumvit Rd, Khlong Tan Nuea, Watthana, <br>
            Bangkok 10110
        </p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
   
    <script>
        // function validateMobileNumber() {
        //     var input = document.getElementById("phone").value;
        //     var regex = /^(\+66|66)?0[689][0-9]{8}$/;
        //     if (regex.test(input)) {
        //         alert("Valid Thai mobile number.");
        //     } else {
        //         alert("Invalid Thai mobile number.");
        //     }
        // }



        // Function to get query parameters
        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                status: params.get('status'),
                message: params.get('message')
            };
        }

        // Function to clear the query parameters from the URL
        function clearQueryParams() {
            const url = new URL(window.location);
            url.searchParams.delete('status');
            url.searchParams.delete('message');
            window.history.replaceState({}, document.title, url.href);
        }

        // Display an alert based on the query parameters
        window.onload = function() {
            const queryParams = getQueryParams();
            if (queryParams.status) {
                if (queryParams.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Record added successfully!',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        clearQueryParams(); // Clear URL parameters after the alert is acknowledged
                    });
                } else if (queryParams.status === 'error') {
                    const message = queryParams.message ? decodeURIComponent(queryParams.message) : 'An error occurred.';
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Error: ' + message,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        clearQueryParams(); // Clear URL parameters after the alert is acknowledged
                    });
                }
            }
        };
    </script>
</body>
</html>

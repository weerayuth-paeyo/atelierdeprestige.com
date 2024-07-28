<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/cropped-maison-margiela-favicon-32x32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <title>Maison Margiela</title>
    <style>
        body {
            font-family: Courier, monospace;
            text-align: center;
            background-color: #ffffff;
            color: #000000;
        }
        .noto-sans-thai {
            font-family: "Noto Sans Thai", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
            font-variation-settings: "wdth" 100;
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
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            font-family: Courier, monospace;
            font-size: 14px;
        }
        .form-container select {
            width: 30%;
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
        .social-wrapper{
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .social-link{
            margin: 0 10px;
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
            To redeem your 2 x Maison Margiela 1.2ml vials, simply present this page to our Brand Ambassadors at any Maison Margiela boutiques in Thailand by XX.
        </p>
        <p class="signup">
            Sign up below to redeem your complimentary samples
        </p>
        <div class="form-container">
            <div style="max-width:500px !important;">
                <form action="insert.php" method="POST">
                    <label for="firstname">First Name / <span class="noto-sans-thai">ชื่อ</span>:</label>
                    <input type="text" id="firstname" name="firstname" required>
                    
                    <label for="lastname">Last Name / <span class="noto-sans-thai">นามสกุล</span>:</label>
                    <input type="text" id="lastname" name="lastname" required>
                    
                    <label for="email">E-mail / <span class="noto-sans-thai">อีเมล</span>:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="phone">Mobile Number / <span class="noto-sans-thai">เบอร์โทรศัพท์</span>:</label>
                    <input type="text" id="phone" name="phone" required maxlength="10">

                    <label for="store">Store / <span class="noto-sans-thai">สาขาที่สะดวกรับของขวัญ</span>:</label>
                    <select id="store" name="store" required style="width: 95%;">
                        <option value="" disabled selected>Click to Select / <span class="noto-sans-thai">เลือกสาขา</span></option>
                        <option value="GaysornAmarin">Gaysorn Amarin / <span class="noto-sans-thai">เกษรอัมรินทร์</span></option>
                        <option value="EmQuartier">EmQuartier / <span class="noto-sans-thai">เอ็มควอเทียร์</span></option>
                    </select>
                    
                    <label for="birthday">Date of Birth/ <span class="noto-sans-thai">วันเดือนปีเกิด</span>:</label>
                    <select id="month" name="month" required>
                        <option value="" disabled selected>Month / <span class="noto-sans-thai">เดือน</span></option>
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
                        <option value="" disabled selected>Day / <span class="noto-sans-thai">วันที่</span></option>
                        <!-- Add day options here -->
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>

                    <select id="year" name="year" required>
                        <option value="" disabled selected>Year / <span class="noto-sans-thai">ปี</span></option>
                        <!-- Add year options here -->
                        <?php
                        $currentYear = date("Y");
                        for ($i = $currentYear; $i >= $currentYear - 40; $i--) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                    
                    <p style="text-align: center;">
                        By submitting this form, I understand and expressly consent that any personal data which I have provided may be processed by Maison Margiela Fragrances for marketing purposes.
                    </p>
                    
                    <div style="display: flex; justify-content: center; width: 100%;">

                        <button type="submit" class="submit-button">SUBMIT</button>
                    </div>
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

        <div class="social-wrapper">
            <div class="social-link">
                <a href="https://www.facebook.com/maisonmargielafragrances" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="2em" height="2em" viewBox="0 0 24 24">
                    <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"></path>
                </svg>
            </div>
            <div class="social-link">
                <a href="https://www.instagram.com/maisonmargielafragrances/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="2em" height="2em" viewBox="0 0 24 24">
                    <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"></path>
                </svg>
            </div>
        </div>

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

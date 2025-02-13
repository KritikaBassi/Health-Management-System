<?php
include './U_CheckLogin.php';
?>

<html lang="en" data-bs-theme="light" nighteye="active" style="background-image: none !important;" ne="0.2677722052262519">

<head>
    <link rel="icon" type="image/x-icon" href="./logo.ico">
    <style>
        /* Darkmode */
        .darkmode .container {
            background-color: #1A1B1F;
            color: white;
        }

        .darkmode {
            background-color: #000104;
            color: white;
        }

        .dark-mode-toggle {
            position: absolute;
            z-index: 100;
            top: 1em;
            right: 1em;
            color: var(--foreground);
            border: 2px solid currentColor;
            padding: 4px;
            background: transparent;
            cursor: pointer;
            border-radius: 5px;
            width: 30px;
            height: 30px;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>About us</title>

    <div class="container">
        <main>
            <button id="dark-mode-toggle" class="dark-mode-toggle">
                <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
                    <path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)" />
                </svg>
            </button>

            <div class="container" style="display:flex; justify-content: center; align-items: center; color:white; background-color: #2D9596;">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="60" fill="currentColor" class="bi bi-heart-pulse" viewBox="0 0 16 16" style="margin: 10px;">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857q.09.083.176.171a3 3 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5" />
                    <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z" />
                </svg>
                <h1 style="margin: 50 50 50 0;">Swasth Bharat Pranali</h1>
            </div>
    </div>
    <div class="container">
        <br>
        <p>Welcome to Swasth Bharat Pranali, a pioneering Health Management System designed with a singular goal: to
            revolutionize healthcare accessibility and empower citizens by placing their medical data at their fingertips. Our
            mission is to seamlessly integrate technology into the healthcare landscape, providing citizens with unprecedented
            access to their health information, anytime and anywhere.</p>
        <h3 style="margin-left: 5px;">About Us:</h3><br>
        <p>At Swasth Bharat Pranali, we believe that access to medical data is a fundamental right that empowers individuals
            to make informed decisions about their health. Our cutting-edge Health Management System is meticulously crafted
            to bridge the gap between citizens and their health information, creating a user-friendly platform that ensures
            privacy, security, and convenience.</p>
        <h3 style="margin-left: 5px;">Our Objective:</h3><br>
        <p>Our primary objective is to streamline the process of accessing medical data for citizens across India. By
            leveraging state-of-the-art technology, we aim to eliminate the barriers that often hinder individuals from
            obtaining their health records promptly. The Swasth Bharat Pranali is specifically designed to cater to the
            government sector, providing a robust platform that allows authorized personnel to access medical data efficiently
            and securely.</p>
        <h3 style="margin-left: 5px;">Key Features:</h3><br>
        <h5 style="margin-left: 30px;">1.Instant Accessibility:</h5>
        <p>Swasth Bharat Pranali ensures that citizens can access their medical data instantly, promoting proactive
            healthcare management.</p>
        <h5 style="margin-left: 30px;">2.User-Friendly Interface:</h5>
        <p>We prioritize user experience, ensuring that our platform is intuitive and easy to navigate, making it accessible
            to individuals of all ages and backgrounds.</p>
        <h5 style="margin-left: 30px;">3.Privacy and Security: </h5>
        <p>The confidentiality of medical data is of utmost importance. Our system employs advanced security measures to
            safeguard sensitive information, adhering to the highest standards of data protection. Integration with Healthcare
            Providers: We facilitate seamless integration with healthcare providers across the nation, ensuring a
            comprehensive and up-to-date health record for each individual.</p>
        <h5 style="margin-left: 30px;">4.Mobility: </h5>
        <p>Swasth Bharat Pranali enables citizens to carry their medical information wherever they go, promoting continuity
            of care and facilitating emergency medical interventions.</p>
        <h3>Our Commitment:</h3><br>
        <p>Swasth Bharat Pranali is committed to contributing to the overall improvement of healthcare in India. By
            empowering citizens with easy access to their medical data, we aim to foster a healthier and more informed
            society. Our partnership with the government reflects our dedication to aligning technological advancements with
            the public interest, creating a sustainable healthcare ecosystem for generations to come. Join us on this
            transformative journey towards a healthier and more connected India. Swasth Bharat Pranali – Your Health, Your
            Data, Your Control.</p>


        <center><a href="./U_AfterLogin.php"><button class="w-20 btn btn-primary btn-lg my-3" type="submit" style="background-color: green;">Go back</button></a></center>
        </main>

        <footer class="mt-1 pt-1 text-body-secondary text-center text-small">
            <p class="mb-0">© SBP</p>
        </footer>

        <script>
            // check for saved 'darkMode' in localStorage
            let darkMode = localStorage.getItem('darkMode');

            const darkModeToggle = document.querySelector('#dark-mode-toggle');

            const enableDarkMode = () => {
                // 1. Add the class to the body
                document.body.classList.add('darkmode');
                // 2. Update darkMode in localStorage
                localStorage.setItem('darkMode', 'enabled');
            }

            const disableDarkMode = () => {
                // 1. Remove the class from the body
                document.body.classList.remove('darkmode');
                // 2. Update darkMode in localStorage 
                localStorage.setItem('darkMode', null);
            }

            // If the user already visited and enabled darkMode
            // start things off with it on
            if (darkMode === 'enabled') {
                enableDarkMode();
            }

            // When someone clicks the button
            darkModeToggle.addEventListener('click', () => {
                // get their darkMode setting
                darkMode = localStorage.getItem('darkMode');

                // if it not current enabled, enable it
                if (darkMode !== 'enabled') {
                    enableDarkMode();
                    // if it has been enabled, turn it off  
                } else {
                    disableDarkMode();
                }
            });
        </script>

        <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
<?php
// submit.php
include 'includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $business_email = htmlspecialchars($_POST['business_email']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $company_name = htmlspecialchars($_POST['company_name']);
    $job_title = htmlspecialchars($_POST['job_title']);
    $company_size = htmlspecialchars($_POST['company_size']);
    $industry = htmlspecialchars($_POST['industry']);
    $functional_area = htmlspecialchars($_POST['functional_area']);
    $state = htmlspecialchars($_POST['state']);
    $zip = htmlspecialchars($_POST['zip']);
    $country = htmlspecialchars($_POST['country']);
    $agree = isset($_POST['agree']) ? 1 : 0;

    $sql = "INSERT INTO submissions (first_name, last_name, business_email, phone_number, company_name, job_title, company_size, industry, functional_area, state, zip, country, agree) 
            VALUES ('$first_name', '$last_name', '$business_email', '$phone_number', '$company_name', '$job_title', '$company_size', '$industry', '$functional_area', '$state', '$zip', '$country', '$agree')";

    if ($conn->query($sql) === TRUE) {
        // Output HTML with JavaScript to trigger the download
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Download</title>
        </head>
        <body>
            <p>Form submitted successfully. Your download will begin shortly.</p>
            <script type='text/javascript'>
                window.onload = function() {
                    window.location.href = 'https://drive.google.com/file/d/1KorMp55ESWBxalW29QYEZmpp3RikVIot/view?usp=drive_link';
                }
            </script>
        </body>
        </html>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

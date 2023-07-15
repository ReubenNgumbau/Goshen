<?php
$companyName = "Goshen Sellers";
$websiteUrl = "https://www.goshensellers.com";
$contactEmail = "rennyx@gmail.com";
$lastUpdatedDate = "July 13, 2023";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Terms of Service - <?php echo $companyName; ?></title>
    <style>
        /* CSS for navigation bar */
        .navbar {
            background-color: mediumseagreen;
            overflow: hidden;
        }
        
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .navbar a:hover {
            background-color: red;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="">Karibu GOSHEN</a>
    </div>
    <h1>Terms of Service</h1>
    <h2>1. Introduction</h2>
    <p>Welcome to <?php echo $companyName; ?>. These terms and conditions outline the rules and regulations for the use of our website.</p>
    <h2>2. Acceptance of Terms</h2>
    <p>By accessing or using our website, you agree to be bound by these terms of service. If you do not agree with any part of these terms, you may not use our website.</p>

    <h2>3. Products and Services</h2>
    <p><?php echo $companyName; ?> offers a range of clothing products and related services. We strive to provide accurate product descriptions and images on our website, but we cannot guarantee the exact representation of colors or other product details.</p>

    <h2>4. Ordering and Payment</h2>
    <p>When you place an order through our website, you agree to provide accurate and complete information. We reserve the right to refuse or cancel any order at our discretion. Payment is required at the time of placing an order.</p>

    <h2>5. Shipping and Delivery</h2>
    <p>We will make reasonable efforts to deliver your order within the estimated timeframe. However, we cannot guarantee delivery dates and are not liable for any delays or damages caused during shipping.</p>

    <h2>6. Returns and Exchanges</h2>
    <p>We accept returns and exchanges within 30 days of the purchase date, subject to our return policy. Please review our return policy on our website for more information.</p>

    <h2>7. Intellectual Property</h2>
    <p>All content on our website, including text, images, logos, and graphics, is the property of <?php echo $companyName; ?> and is protected by applicable intellectual property laws. You may not use, modify, or distribute our content without prior written consent.</p>

    <h2>8. Disclaimer of Warranty</h2>
    <p>Our website and its content are provided "as is" without any warranty or representation, express or implied. We do not guarantee the accuracy, reliability, or completeness of the information on our website.</p>

    <h2>9. Limitation of Liability</h2>
    <p>In no event shall <?php echo $companyName; ?> be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in connection with the use of our website or the products/services offered.</p>

    <h2>10. Contact Information</h2>
    <p>If you have any questions or concerns regarding these terms of service, please contact us at <a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a>.</p>

    <p>Last updated: <?php echo $lastUpdatedDate; ?></p>
</body>
</html>
<?php Include 'footer.php' ?>


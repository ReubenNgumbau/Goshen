<?php

// Privacy Policy

// Collecting Personal Information
$personalInfoCollection = "
    We collect personal information from you when you:
    - Place an order on our website
    - Create an account
    - Subscribe to our newsletter
    - Contact our customer support
    - Participate in surveys or promotions
    - Interact with us on social media platforms
";

// Types of Personal Information Collected
$personalInfoTypes = "
    The types of personal information we may collect include:
    - Name
    - Email address
    - Phone number
    - Billing and shipping addresses
    - Payment information
    - IP address
    - Browsing history on our website
";

// Use of Personal Information
$personalInfoUse = "
    We may use your personal information to:
    - Process and fulfill your orders
    - Provide customer support and respond to inquiries
    - Send you promotional offers and newsletters (with your consent)
    - Improve our website and services
    - Conduct market research and analyze customer preferences
    - Prevent fraud and enhance security
";

// Sharing of Personal Information
$personalInfoSharing = "
    We may share your personal information with:
    - Third-party service providers who assist us in operating our website and conducting our business
    - Shipping carriers to deliver your orders
    - Law enforcement or government authorities when required by law
    - Other parties with your consent or as necessary to protect our legal rights
";

// Data Retention
$dataRetention = "
    We will retain your personal information for as long as necessary to fulfill the purposes outlined in this privacy policy, unless a longer retention period is required or permitted by law.
";

// Data Security
$dataSecurity = "
    We take appropriate measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, please note that no method of transmission over the internet or electronic storage is 100% secure.
";

// Your Privacy Rights
$privacyRights = "
    You have the right to:
    - Access, update, or delete your personal information
    - Object to the processing of your personal information
    - Withdraw your consent for marketing communications
    - Lodge a complaint with a data protection authority
";

// Changes to the Privacy Policy
$policyChanges = "
    We may update this privacy policy from time to time. We will notify you of any changes by posting the updated policy on our website.
";

// Contact Information
$contactInfo = "
    If you have any questions or concerns about our privacy policy, please contact us at:
    - Email: privacy@goshensellers.com
    - Phone: +254 713507242
";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Privacy Policy</title>
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
    <h1>Privacy Policy</h1>
    
    <h2>Collecting Personal Information</h2>
    <p><?php echo $personalInfoCollection; ?></p>
    
    <h2>Types of Personal Information Collected</h2>
    <p><?php echo $personalInfoTypes; ?></p>
    
    <h2>Use of Personal Information</h2>
    <p><?php echo $personalInfoUse; ?></p>
    
    <h2>Sharing of Personal Information</h2>
    <p><?php echo $personalInfoSharing; ?></p>
    
    <h2>Data Retention</h2>
    <p><?php echo $dataRetention; ?></p>
    
    <h2>Data Security</h2>
    <p><?php echo $dataSecurity; ?></p>
    
    <h2>Your Privacy Rights</h2>
    <p><?php echo $privacyRights; ?></p>
    
    <h2>Changes to the Privacy Policy</h2>
    <p><?php echo $policyChanges; ?></p>
    
    <h2>Contact Information</h2>
    <p><?php echo $contactInfo; ?></p>
</body>
</html>
<?php Include 'footer.php' ?>

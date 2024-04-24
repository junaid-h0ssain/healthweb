<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>

<section class="faq-section">
    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>
        
        <input type="text" id="search" placeholder="Search FAQs...">
        
        <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-btn">What medical services do you offer?</button>
                <div class="accordion-content">
                    <p>We offer a wide range of medical services including primary care, specialty care, diagnostic tests, preventive screenings, vaccinations, and more. Our medical professionals are dedicated to providing comprehensive care to meet your healthcare needs.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-btn">How can I schedule an appointment?</button>
                <div class="accordion-content">
                    <p>To schedule an appointment, you can call our clinic directly or use our online appointment scheduling system. Our staff will assist you in finding a convenient time for your visit.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-btn">Do you accept insurance?</button>
                <div class="accordion-content">
                    <p>Yes, we accept most major insurance plans. Please check with our billing department or your insurance provider to verify coverage and eligibility before your appointment.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-btn">What should I bring to my appointment?</button>
                <div class="accordion-content">
                    <p>It's helpful to bring your insurance card, photo ID, a list of current medications, any relevant medical records or test results, and a list of questions or concerns you may have for your healthcare provider.</p>
                </div>
            </div>
        </div>
        
        <div class="contact-form">
            <h3>Still have questions?</h3>
            <p>Fill out the form below and we'll get back to you as soon as possible.</p>
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</section>
  
</body>
</html>

<?php
  include 'footer.php';
?>
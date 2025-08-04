<?php include 'includes/header.php'; ?>

<body class="dark-industrial">
    <div id="particles-js"></div>
    
    <?php include 'includes/header.php'; ?>

    <main class="container">
        <section class="contact-section">
            <div class="contact-grid">
                <div class="contact-info">
                    <h3 class="section-title"><span>GET IN TOUCH</span></h3>
                    
                    <p>Have a project in mind or need consultation? Feel free to reach out.</p>
                    
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <a href="mailto:contact@jenosan.com">jenosanjeyaradnam471@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <a href="tel:+1234567890">+94764829842</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Location</h4>
                            <span>Nelliyady,Point Pedro</span>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-stack-overflow"></i></a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3 class="section-title"><span>SEND A MESSAGE</span></h3>
                    
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $subject = htmlspecialchars($_POST['subject']);
                        $message = htmlspecialchars($_POST['message']);
                        
                        // Validate inputs
                        $errors = [];
                        
                        if (empty($name)) {
                            $errors[] = 'Name is required';
                        }
                        
                        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errors[] = 'Valid email is required';
                        }
                        
                        if (empty($message)) {
                            $errors[] = 'Message is required';
                        }
                        
                        if (empty($errors)) {
                            // Send email (configure with your SMTP settings)
                            $to = 'contact@jenosan.com';
                            $headers = "From: $email\r\n";
                            $headers .= "Reply-To: $email\r\n";
                            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                            
                            $email_body = "Name: $name\n";
                            $email_body .= "Email: $email\n";
                            $email_body .= "Subject: $subject\n\n";
                            $email_body .= "Message:\n$message";
                            
                            if (mail($to, $subject, $email_body, $headers)) {
                                echo '<div class="alert alert-success">Thank you! Your message has been sent.</div>';
                            } else {
                                echo '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger">';
                            echo implode('<br>', $errors);
                            echo '</div>';
                        }
                    }
                    ?>
                    
                    <form method="POST" action="contact.php">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
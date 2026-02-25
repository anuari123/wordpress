<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<div id="contact" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Please fill out the form below to get in touch with us.</p>
            </div>
        </section>
             <section class="contact-form-section">
                <div class="container">
                 <form action="" methond="post" class="contact-form">
                    <p>
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" required>
                    </p>
                     <p>
                        <label for="email">your Email:</label><br>
                        <input type="email" id="email" name="email" required>
                    </p>
                     <p>
                        <label for="subject">Subject:</label><br>
                        <input type="text" id="subject" name="subject" required>
                    </p>
                     <p>
                        <label for="message">Message:</label><br>
                        <textarea name="message" id="message" required></textarea>
                    </p>
                    <p>
                        <input type="submit" name="submit_contact" value="Send Message">
            </div>
        </section>
    </main>
</div>
<?php
get_footer(); ?>
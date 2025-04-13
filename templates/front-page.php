<?php
/**
 * ZenTechTheme Front Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 1.0
 * Template Name: Front Page
 */
get_header();
?>

<section id="hero" class="hero">
    <div class="container">
        <h1>Empower Your Tech Future</h1>
        <p>Discover innovative solutions for your digital business.</p>
        <a href="#contact" class="btn">Get Started</a>
    </div>
</section>

<section id="about">
    <div class="container">
        <h2>About Us</h2>
        <p>We are a leading technology company delivering cutting-edge software and IT services since 2010.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team.jpg" alt="Our technology team collaborating" class="full-width">
    </div>
</section>

<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="grid">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service1.jpg" alt="Cloud Computing Service">
                <h3>Cloud Computing</h3>
                <p>Scalable solutions for your data needs.</p>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service2.jpg" alt="Cybersecurity Service">
                <h3>Cybersecurity</h3>
                <p>Protect your business with top-tier security.</p>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service3.jpg" alt="Software Development Service">
                <h3>Software Development</h3>
                <p>Custom apps tailored to your goals.</p>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <h2>Our Portfolio</h2>
        <?php echo do_shortcode('[zentech_slider]'); ?>
    </div>
</section>

<section id="pricing">
    <div class="container">
        <h2>Pricing Plans</h2>
        <div class="grid">
            <div class="card">
                <h3>Basic</h3>
                <p>$99/month</p>
                <p>Essential features for startups.</p>
            </div>
            <div class="card">
                <h3>Pro</h3>
                <p>$199/month</p>
                <p>Advanced tools for growing businesses.</p>
            </div>
            <div class="card">
                <h3>Enterprise</h3>
                <p>$499/month</p>
                <p>Full suite for large organizations.</p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials">
    <div class="container">
        <h2>What Our Clients Say</h2>
        <div class="grid">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial1.jpg" alt="Client Testimonial 1">
                <p>"ZenTech transformed our business!"</p>
                <h3>Jane Doe</h3>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial2.jpg" alt="Client Testimonial 2">
                <p>"Outstanding service and support."</p>
                <h3>John Smith</h3>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contact-form">
            <input type="text" id="name" placeholder="Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <textarea id="message" placeholder="Message" required></textarea>
            <button type="submit" class="btn">Send</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>

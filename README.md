# ZenTechTheme

**Author**: encrypter15  
**Email**: encrypter15@gmail.com  
**License**: MIT  
**Version**: 1.0  

## Description

ZenTechTheme is a modern, one-page WordPress theme for technology projects, inspired by the Zen Technology Website Template. It features a striking, animated design with sections for Hero, About, Services, Portfolio, Pricing, Testimonials, and Contact. Built for WordPress, it includes a custom slider plugin (ZenTechSlider) and optional Google Analytics tracking. The theme is responsive, SEO-optimized, and designed for deployment on a hosting provider’s WordPress site.

### Features
- **One-Page Design**: Seamless scrolling with smooth animations.
- **Responsive**: Mobile, tablet, and desktop compatibility.
- **Custom Slider Plugin**: ZenTechSlider for portfolio/testimonials carousel.
- **Google Analytics**: Optional tracking via functions.php.
- **SEO Optimized**: Meta descriptions and alt texts included.
- **WordPress Native**: Installable via hosting provider’s dashboard.
- **MIT License**: Free to use, modify, and distribute.

## Installation

### Prerequisites
- A WordPress hosting provider (e.g., Bluehost, SiteGround, WP Engine).
- Access to WordPress admin dashboard.
- Optional: Google Analytics ID (e.g., `G-XXXXXXXXXX`).

### Project Setup
1. **Run the Creation Script**:
   - On your local machine or a server with bash access:
     ```bash
     chmod +x create_project.sh
     ./create_project.sh
     ```
   - This generates the `ZenTechTheme` folder.

2. **Zip the Theme**:
   ```bash
   cd ZenTechTheme
   zip -r ZenTechTheme.zip .
   ```

3. **Upload and Install Theme**:
   - Log in to your WordPress admin dashboard (`yourdomain.com/wp-admin`).
   - Go to **Appearance > Themes > Add New > Upload Theme**.
   - Upload `ZenTechTheme.zip` and click **Install Now**.
   - Activate the theme.

4. **Install ZenTechSlider Plugin**:
   - Go to **Plugins > Add New > Upload Plugin**.
   - Upload `plugins/zentech-slider/zentech-slider.zip` (create this by zipping the `zentech-slider` folder).
   - Activate the plugin.
   - Configure settings at **Settings > ZenTech Slider** (e.g., enable/disable autoplay).

5. **Configure Google Analytics** (optional):
   - Edit `functions.php`:
     ```php
     $ga_id = 'G-XXXXXXXXXX'; // Replace with your tracking ID
     ```
   - Save and upload the updated theme via FTP or hosting file manager.

6. **Set Up Menu**:
   - Go to **Appearance > Menus**.
   - Create a menu with links to `#hero`, `#about`, `#services`, `#portfolio`, `#pricing`, `#testimonials`, `#contact`.
   - Assign it to the **Primary Menu** location.

7. **Customize**:
   - Edit `front-page.php` for content changes.
   - Update `style.css` for styling.
   - Modify `main.js` for additional JavaScript.

## Usage

- **Front Page**: Customize sections in `front-page.php`.
- **Slider**: Use `[zentech_slider]` shortcode in pages or edit `zentech-slider.php` for custom slides.
- **Analytics**: Verify tracking in Google Analytics dashboard if ID is set.
- **SEO**: Update meta keywords in template files as needed.

## Notes

- **Hosting**: Use a WordPress-compatible host. Ensure FTP or file manager access for image uploads.
- **Google Analytics**: Disabled by default. Set `$ga_id` to enable.
- **Slider Plugin**: ZenTechSlider is lightweight. For advanced features, edit `zentech-slider.php`.
- **Contact Form**: Demo only; integrate Contact Form 7 for production.
- **SEO**: Meta tags included; consider Yoast SEO for advanced optimization.
- **Fonts**: Uses Google’s Roboto (via CSS).

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

## Contact

For questions or suggestions, email encrypter15@gmail.com.

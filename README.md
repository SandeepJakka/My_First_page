rtCamp Custom WordPress Theme
This is a basic custom WordPress theme developed by Sandeep Jakka as a learning project, demonstrating foundational web development skills (HTML, CSS, JavaScript, PHP, MySQL) within the WordPress framework. This project is part of my preparation for the Associate Software Engineer role at rtCamp.

## **Features**

* **Responsive Design:** Built with modern CSS to adapt to various screen sizes (desktop, tablet, mobile).
* **Basic WordPress Structure:** Includes essential theme files (`style.css`, `index.php`, `header.php`, `footer.php`, `functions.php`).
* **Dynamic Content Display:** Utilizes The Loop to fetch and display WordPress posts and pages.
* **Custom Navigation:** Registers a primary menu location and displays a customizable navigation menu.
* **Google Fonts Integration:** Loads the 'Inter' font for a clean, modern typography.
* **Standard WordPress Hooks:** Properly uses `wp_head()`, `wp_footer()`, `wp_enqueue_style()`, and `add_action()` for extensibility.

## **Technologies Used**

* **PHP:** Core language for WordPress backend.
* **HTML5:** For semantic structure.
* **CSS3:** For styling and responsive design.
* **JavaScript:** (Future enhancements will include more dynamic client-side interactions).
* **WordPress:** The Content Management System framework.
* **MySQL:** (Underlying database for WordPress).
* **Git:** For version control.

## **Setup and Installation (Local by Flywheel)**

1.  **Prerequisites:**
    * [Local by Flywheel](https://localwp.com/) installed.
    * Git installed on your system.
    * A GitHub account.

2.  **Clone the Repository:**
    ```bash
    git clone https://github.com/[Your-GitHub-Username]/[your-repo-name].git
    ```
    Replace `[Your-GitHub-Username]` and `[your-repo-name]` with your actual GitHub details.

3.  **Place the Theme:**
    * Open Local by Flywheel and create a new WordPress site (or use an existing one, like "SandeepJakka").
    * Navigate to your Local site's theme directory: `[Your-Local-Site-Folder]/app/public/wp-content/themes/`
    * Move the cloned `[your-repo-name]` folder (which contains this theme) into the `themes` directory.

4.  **Activate the Theme:**
    * Go to your WordPress Dashboard (e.g., `http://[your-local-site-name].local/wp-admin/`).
    * Navigate to **Appearance > Themes**.
    * Find "rtCamp Custom Theme" and click **"Activate"**.

5.  **Configure Menus (Optional but Recommended):**
    * Go to **Appearance > Menus**.
    * Create a new menu, add some pages (e.g., "Sample Page"), and assign it to the "Primary Menu" location. Save the menu.

## **Future Enhancements**

* Implement specific template files (`page.php`, `single.php`, `archive.php`).
* Add custom post types and taxonomies.
* Integrate more advanced JavaScript for dynamic features.
* Explore Customizer options for theme settings.
* Implement basic unit testing.

---

Developed by [Sandeep Jakka](https://www.linkedin.com/in/sandeepjakka/)

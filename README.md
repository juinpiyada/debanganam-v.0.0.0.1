# Debanganam Old Age Home Website - v1.0.0

A premium, fully responsive, and SEO-optimized website for **Debanganam Old Age Home**, located in Sonarpur, Kolkata. This project is built using a modular PHP architecture and modern web design principles.

## 🚀 Key Features

- **Modular PHP Architecture**: Efficient code management using `header.php` and `footer.php` includes.
- **Premium UI/UX**: Built with **Tailwind CSS** and **Google Fonts (Poppins)** for a clean, healthcare-focused aesthetic.
- **SEO Optimized**:
  - Custom Meta Titles and Descriptions for every page.
  - Extensionless URLs (e.g., `/services` instead of `services.php`).
  - Google Image Sitemap integration.
  - JSON-LD Structured Data for Local Business.
- **Interactive Elements**:
  - Custom animated hamburger menu for mobile.
  - Animated stat counters for brand achievements.
  - Floating WhatsApp CTA for instant communication.
  - Responsive image gallery with SEO-rich alt text.
- **Full Page Suite**:
  - Home (Hero, Services preview, Stats, Testimonials, Admission preview).
  - About Us (Mission, Vision, Team, Life at Debanganam).
  - Services (Bedridden care, Post-operative care, Nursing, etc.).
  - Facilities (Medical equipment, Support services).
  - Photo Gallery (Categorized rooms, activities, and food).
  - Admission (Transparent 5-step process).
  - Contact Us (Contact form, Google Maps, Multi-channel info).

## 🛠️ Technology Stack

- **Backend**: PHP 8.x
- **Frontend**: Tailwind CSS, Vanilla JavaScript
- **Server**: Apache (with custom `.htaccess` security and rewriting)
- **SEO**: XML Sitemap, robots.txt, Schema.org (JSON-LD)

## 📁 Project Structure

```text
├── img/                # Optimized image assets and logo
├── .htaccess           # Security headers and URL rewriting
├── index.php           # Home page
├── aboutus.php         # About page
├── services.php        # Services page
├── facilities.php      # Facilities page
├── gallery.php         # Photo gallery page
├── admission.php       # Admission process page
├── contact.php         # Contact page
├── 404.php             # Custom error page
├── header.php          # Global header component
├── footer.php          # Global footer component
├── sitemap.xml         # SEO sitemap
├── robots.txt          # Crawler instructions
└── README.md           # Project documentation
```

## ⚙️ Installation & Setup

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   ```
2. **Deploy to an Apache Server**:
   Ensure `mod_rewrite` is enabled on your Apache server to support extensionless URLs.
3. **Configure Domain**:
   Update the `loc` entries in `sitemap.xml` and the `canonical` link in `header.php` with your live domain.

## 📄 License

This project is developed and maintained by **GlobeForge**.
Website: [https://globeforge.great-site.net/](https://globeforge.great-site.net/)

---
*Developed with ❤️ for Debanganam Old Age Home.*

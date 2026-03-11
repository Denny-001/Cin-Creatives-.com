# CIN CREATIVES — Digital Agency Website

A production-ready, enterprise-grade multi-page digital agency website built with PHP, HTML5, Vanilla CSS, and Vanilla JS (ES6+), featuring cinematic motion, layered UI depth, Three.js 3D effects, and distributed animated backgrounds.

---

## 📁 Project Structure

```
cincreatives/
│
├── index.php           ← Homepage (hero, services, portfolio preview, CTA)
├── about.php           ← About page (team, process, skills, values)
├── services.php        ← All 8 services with detailed sections
├── portfolio.php       ← Filterable project portfolio with case studies
├── pricing.php         ← Tabbed pricing plans, comparison table, FAQ
├── blog.php            ← Blog with filter, featured post, newsletter
├── contact.php         ← Secure PHP contact form with CSRF protection
├── sitemap.xml         ← SEO sitemap
├── robots.txt          ← Search engine crawl rules
│
├── includes/
│   ├── header.php      ← HTML head, meta, OG tags, JSON-LD, CSS links
│   ├── navbar.php      ← Responsive navigation with active states
│   └── footer.php      ← Footer, social links, newsletter, JS scripts
│
├── assets/
│   ├── css/
│   │   ├── style.css        ← Core design system, components, layout
│   │   ├── animations.css   ← All animation keyframes and utilities
│   │   ├── motion-bg.css    ← 10 motion background technique styles
│   │   └── responsive.css   ← Mobile-first responsive breakpoints
│   │
│   ├── js/
│   │   ├── main.js          ← Cursor, navbar, counters, tabs, accordion
│   │   ├── hero-3d.js       ← Three.js particle constellation (hero)
│   │   ├── motion-bg.js     ← Canvas particles, parallax, aurora system
│   │   └── animations.js    ← GSAP scroll triggers, entrance animations
│   │
│   ├── videos/
│   │   ├── bg-loop1.mp4    ← Background video (portfolio/about section)
│   │   └── bg-loop2.mp4    ← Background video (portfolio hero)
│   │
│   └── images/
│       ├── favicon.svg
│       ├── og-image.jpg     ← Social share image (1200×630)
│       ├── services/        ← Service section images
│       ├── portfolio/       ← Portfolio project screenshots
│       ├── backgrounds/     ← Parallax background images
│       │   ├── bg-services.jpg
│       │   ├── bg-pricing.jpg
│       │   └── bg-contact.jpg
│       ├── team/            ← Team member photos
│       └── blog/            ← Blog post images
```

---

## 🚀 XAMPP Setup Guide

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) installed (v8.0+)
- PHP 8.0+
- A modern browser (Chrome, Firefox, Edge)

### Steps

1. **Place the project in XAMPP's htdocs:**
   ```
   C:\xampp\htdocs\cincreatives\
   ```

2. **Start XAMPP services:**
   - Open XAMPP Control Panel
   - Start **Apache** (required for PHP)
   - MySQL is optional (project uses no database)

3. **Access the site:**
   ```
   http://localhost/cincreatives/
   ```

4. **Enable PHP sessions** (default in XAMPP — needed for CSRF protection):
   - Open `php.ini` in XAMPP (usually `C:\xampp\php\php.ini`)
   - Ensure `session.save_path` is writable

### Troubleshooting
- **Blank page?** Enable PHP error reporting by adding to the top of any page:
  ```php
  ini_set('display_errors', 1); error_reporting(E_ALL);
  ```
- **Styles not loading?** Check that Apache is started and the URL is correct.
- **Fonts not loading?** Requires an internet connection (Google Fonts CDN).

---

## 🎬 How to Replace Background Videos

1. **Prepare your video files:**
   - Format: `.mp4` (H.264 codec recommended)
   - Resolution: 1920×1080 or higher
   - Duration: 10–30 seconds (seamless loop)
   - File size: Keep under 8MB for performance
   - For best results: dark/moody content, slow motion

2. **Replace the files:**
   ```
   assets/videos/bg-loop1.mp4   ← Used on homepage (portfolio section)
   assets/videos/bg-loop2.mp4   ← Used on portfolio page (hero)
   ```

3. **Tips for sourcing free loop videos:**
   - [Pexels](https://pexels.com/videos/) — Free HD videos
   - [Coverr](https://coverr.co/) — Free background loops
   - [Mixkit](https://mixkit.co/) — Free video templates

---

## 🖼 How to Replace Background Images

Replace images in `assets/images/backgrounds/`:

| File | Where Used | Recommended Size |
|------|-----------|-----------------|
| `bg-services.jpg` | Services page hero (parallax) | 2560×1440 |
| `bg-pricing.jpg` | Pricing comparison section | 2560×1440 |
| `bg-contact.jpg` | Contact page hero (parallax) | 2560×1440 |
| `og-image.jpg` | Social share preview image | 1200×630 |

**Tips:**
- Use dark, moody photography for best contrast
- Source from [Unsplash](https://unsplash.com/), [Pexels](https://pexels.com/)
- Run images through [Squoosh](https://squoosh.app/) before uploading

---

## 📧 Setting Up the Contact Form

The contact form in `contact.php` includes full security:
- ✅ CSRF token validation
- ✅ Honeypot bot protection  
- ✅ Server-side input validation
- ✅ `htmlspecialchars()` sanitization
- ✅ Email validation with `filter_var()`

To enable actual email sending:
1. Open `contact.php`
2. Uncomment this line (around line 85):
   ```php
   // mail($to, $subject, $body, $headers);
   ```
3. Update the `$to` variable with your actual email address
4. Configure XAMPP's `sendmail` or use [PHPMailer](https://github.com/PHPMailer/PHPMailer) with SMTP for reliable delivery

---

## 🚀 Deployment Steps (Production)

### Shared Hosting (cPanel)
1. Upload all files to `public_html/` or a subdirectory
2. Update all absolute URLs in `includes/header.php` from `localhost` to your domain
3. Update `$site_url` variable in `header.php`
4. Enable HTTPS and update the canonical URL
5. Set file permissions: folders `755`, files `644`

### VPS (Apache/Nginx)
1. Clone/upload to `/var/www/html/cincreatives/`
2. Configure virtual host to point to project root
3. Enable `mod_rewrite` for Apache
4. Add SSL certificate via Let's Encrypt

### Environment Variables (Recommended)
Create a `.env` file or `config.php` for:
```php
define('SITE_URL', 'https://yourdomain.com');
define('CONTACT_EMAIL', 'hello@yourdomain.com');
define('SMTP_HOST', 'smtp.sendgrid.net');
```

---

## ⚡ Performance Optimization Tips

### Images
- Compress all images with [Squoosh](https://squoosh.app/) (save as WebP)
- Use `loading="lazy"` on all non-hero images (already included)
- Set explicit `width` and `height` attributes to prevent layout shift

### CSS / JS
- Minify CSS: Use [cssnano](https://cssnano.co/) or [PurifyCSS](https://purifycss.online/)
- Minify JS: Use [UglifyJS](https://github.com/mishoo/UglifyJS) or Webpack
- Serve from a CDN if possible

### PHP
- Enable OPcache in `php.ini`: `opcache.enable=1`
- Use output buffering: `ob_start()` at top of pages

### Videos
- Use `preload="none"` for off-screen videos (already set)
- Consider using WebM format alongside MP4 for better compression

### Fonts
- Fonts are served from Google CDN (fast)
- For offline/intranet: download and self-host in `assets/fonts/`

---

## 🎨 Customization Guide

### Colors (change in `assets/css/style.css`:
```css
:root {
  --primary-black: #0F0F0F;     /* Main background */
  --secondary-black: #202020;   /* Secondary sections */
  --accent-green: #5DD62C;      /* Brand accent color */
  --deep-green: #337418;        /* Darker green variant */
  --soft-white: #F8F8F8;        /* Primary text */
}
```

### Fonts
Change the Google Fonts import in `includes/header.php` and update:
```css
--font-primary: 'Inter', sans-serif;
--font-heading: 'Poppins', sans-serif;
```

### Logo
Update in `includes/navbar.php` and `includes/footer.php`.
Replace the `CC` text logo with an `<img>` tag pointing to your logo file.

### Business Information
Update in:
- `includes/footer.php` — phone, email, address, social links
- `contact.php` — contact details section
- `includes/header.php` — JSON-LD structured data

---

## 🔒 Security Features

- ✅ CSRF token on all forms
- ✅ Honeypot field to block spam bots
- ✅ `htmlspecialchars()` on all outputs  
- ✅ `filter_var()` email validation
- ✅ `strip_tags()` on all inputs
- ✅ `maxlength` attributes on all inputs
- ✅ No database queries (zero SQL injection risk)
- ✅ `session_start()` with regenerated tokens

---

## 📜 License

© 2026 CIN CREATIVES. All rights reserved.

Built with ❤️ by the CIN CREATIVES team.

# Custom WordPress Theme Development

A responsive, lightweight custom WordPress theme built from scratch with clean template architecture, modular template parts, and custom styling.

## 📁 Theme Structure

```text
├── 404.php                 # Custom 404 Error Page template
├── archive.php             # Archive page template (Categories, Tags, Authors)
├── comments.php            # Custom comments list and response form
├── footer.php              # Dynamic footer with widget support
├── functions.php           # Theme setup, widget areas, and menu support
├── header.php              # Site header and navigation bar
├── index.php               # Main fallback template file
├── page.php                # Single page layout template
├── search.php              # Search results page template
├── single.php              # Single post layout template
├── style.css               # Main stylesheet including custom footer styles
└── template-parts/
    ├── content-archive.php # Template part for archive post items
    ├── content-article.php # Template part for single article content
    └── content-page.php    # Template part for static page content
✨ Features
Modular Design: Utilizes template-parts/ for clean, reusable PHP code structure.

Dynamic Headers & Footers: Integrated custom WordPress widget areas and navigation menus.

Custom Post & Archive Layouts: Dedicated templates for blog posts, search results, single pages, and category archives.

Interactive Comments: Full support for WordPress nested comments and custom response forms.

Error Handling: Lightweight user-friendly custom 404.php layout.

🚀 Setup & Installation
Download or clone this repository:

Bash
git clone [https://github.com/your-username/your-repo-name.git](https://github.com/your-username/your-repo-name.git)
Move the repository folder into your local WordPress theme directory:
wp-content/themes/

Log in to your WordPress Dashboard.

Navigate to Appearance > Themes and click Activate on the custom theme.

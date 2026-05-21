# WJCT Twenty Twenty-Five Child Theme

## Overview

This repository contains a custom child theme built from the default WordPress Twenty Twenty-Five theme for the WJCT WordPress Developer skills test.

The child theme demonstrates proper WordPress child theme structure, stylesheet enqueueing, font customization, and lightweight theme customization using WordPress hooks and best practices.

---

## Features

- Proper WordPress child theme setup
- Parent and child stylesheet enqueueing
- Google Fonts loaded using `wp_enqueue_style()`
- Alice Blue site background color
- Custom typography:
  - Palette Mosaic for headings
  - Oswald for body text
- Custom footer output using a WordPress action hook
- Translation-ready footer text
- Cache-friendly stylesheet versioning

---

## Installation

1. Copy the theme folder into:

   `wp-content/themes/`

2. Activate the theme in:

   `Appearance → Themes`

3. Ensure the parent theme (`Twenty Twenty-Five`) is installed.

---

## Testing

After activation, verify the following:

- The site background color changes to Alice Blue
- Headings use the Palette Mosaic font
- Body text uses the Oswald font
- The footer displays:

  `Built for WJCT skills test`

- Stylesheets load correctly without errors in browser developer tools

---

## WordPress Best Practices Used

- Child theme architecture
- Proper stylesheet enqueueing with dependencies
- Avoided CSS `@import` in favor of WordPress enqueueing
- Escaped translatable output using WordPress localization functions
- Removed inline styling where possible
- Followed WordPress coding style formatting conventions

---

## AI-Assisted Workflow

AI tools including ChatGPT were used during development to assist with:

- Reviewing WordPress child theme implementation patterns
- Verifying WordPress best practices
- Identifying potential security and maintainability improvements
- Reviewing formatting and code organization

All code was manually reviewed, implemented, and tested locally in WordPress.

---

## Improvements With More Time

- Refactor footer customization to integrate directly with Twenty Twenty-Five block theme template parts instead of using the global `wp_footer` hook
- Add Customizer controls for theme options
- Improve accessibility styling and contrast testing
- Add asset minification/build tooling
- Expand block theme customization support
- Add automated linting using WordPress Coding Standards (PHPCS)

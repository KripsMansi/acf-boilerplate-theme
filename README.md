# ACF Boilerplate Theme

WordPress **theme** boilerplate using Advanced Custom Fields as the content layer. Structure as starter: templates, Local JSON, flexible layouts, no design.

Folder / text domain: **`acf-boilerplate-theme`**

This is **not** a Gutenberg plugin. For native blocks see `hbwa-gutenberg-blocks`.

## Prefix (`acfb_`)

Everything in this theme is prefixed so you can search and extend it without collisions:

| Kind | Prefix | Example |
|---|---|---|
| Functions / hooks | `acfb_` | `acfb_render_flexible_content()`, `acfb_enqueue_assets()` |
| Constants | `ACFB_THEME_` | `ACFB_THEME_DIR`, `ACFB_THEME_URI`, `ACFB_THEME_VERSION` |
| Script/style handles | `acfb-` | `acfb-main` |
| Text domain | `acf-boilerplate-theme` | `__('…', 'acf-boilerplate-theme')` |
| Variables | `$acfb_` | `$acfb_heading` |

Grep: `acfb_`

## Structure

```
acf-boilerplate-theme/
├── style.css                 # Theme declaration only
├── functions.php
├── header.php / footer.php
├── index.php, front-page.php, page.php, single.php
├── archive.php, search.php, 404.php
├── screenshot.png
├── assets/{css,js,images}/
├── inc/                      # setup, enqueue, template-tags, acf
├── acf/json/                 # ACF Local JSON
├── template-parts/{content,header,footer,acf/layouts}/
└── templates/blank.php
```

## Helpers

- `acfb_get_template_part()`
- `acfb_render_flexible_content( 'page_sections' )`
- `acfb_get_field()`

Layout files: `template-parts/acf/layouts/{layout-name}.php`  
ACF layout `example_section` → `example-section.php`

## Next steps

1. Activate **ACF Boilerplate Theme**
2. Install ACF (Flexible Content needs ACF PRO)
3. Create a flexible field named `page_sections`

## License

GPL-2.0-or-later. Author: [hell0bunny](https://profiles.wordpress.org/hell0bunny/).

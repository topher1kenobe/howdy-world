# Howdy World

**Contributors:** topher1kenobe  
**Tags:** admin, toolbar, greeting, fun, internationalization  
**Donate link:** https://heropress.com/donate  
**Requires at least:** 5.0  
**Tested up to:** 6.9  
**Requires PHP:** 7.2  
**Stable tag:** 1.0.3  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

Replaces the "Howdy" in the WordPress admin toolbar with a randomly chosen greeting from 100+ languages — a different one every page load.

---

## Description

Ever get tired of the same old `"Howdy, Username!"` in the WordPress admin bar?

**Howdy World** swaps that greeting out for a randomly selected hello from over 100 languages and dialects from around the globe — from *Hola* to *こんにちは* to *Kia ora* to *Sawubona*. A new greeting appears every time you load a page in the admin, turning a tiny UI detail into a small window on the world.

### Features

- 100+ greetings spanning languages from every continent
- Completely random selection on each page load
- Zero configuration required — works immediately on activation
- No external requests, no tracking, no nonsense

### Supported Languages Include

English, Spanish, French, German, Italian, Portuguese, Russian, Mandarin Chinese, Japanese, Korean, Arabic, Hindi, Swedish, Danish, Finnish, Dutch, Czech, Polish, Hungarian, Greek, Turkish, Hebrew, Romanian, Serbian, Slovak, Bulgarian, Latvian, Lithuanian, Estonian, Zulu, Swahili, Hausa, Chichewa, Setswana, Persian, Azerbaijani, Uzbek, Kazakh, Kyrgyz, Ukrainian, Belarusian, Georgian, Armenian, Albanian, Croatian, Slovenian, Irish, Welsh, Luxembourgish, Afrikaans, Basque, Catalan, Esperanto, Hawaiian, Ojibwe, Choctaw, Cherokee, Navajo, Anishinaabe, Norwegian, Bengali, Tamil, Kannada, Telugu, Marathi, Punjabi, Igbo, Akan/Twi, Tongan, Fijian, Samoan, Tahitian, Māori, Australian English, Filipino/Tagalog, Malay, Indonesian, Thai, Vietnamese, Burmese, Khmer, Lao, Tibetan, Mongolian, Kurdish, Latin, and more.

### Privacy

Howdy World does not collect, transmit, or store any personal data. No external connections are made.

---

## Installation

1. Upload the `howdy-world` folder to the `/wp-content/plugins/` directory, **or** install directly from the WordPress plugin repository via **Plugins → Add New**.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. That's it — the greeting changes immediately.

Optionally, visit **Settings → Howdy World** to:

- Browse the full list of supported greetings

---

## Frequently Asked Questions

### Does this affect the front end of my site?

No. The greeting only appears in the WordPress admin toolbar, which is only shown to logged-in users.

### Can I choose specific languages or disable certain ones?

Not yet — it's fully random by design. A future version may add an allow/deny list. Feel free to open a feature request on the plugin's support forum.

### Will this conflict with translation plugins?

It should not. The plugin hooks into WordPress's `gettext` filter at a high priority and only modifies the specific `"Howdy, %1$s!"` string.

---

## Screenshots

1. The admin toolbar showing `"Kia ora, Topher!"` with a tooltip reading `"Maori"`.
2. The Settings page with the greeting reference table.

---

## Changelog

### 1.0.3

- Removed tooltip feature entirely — no CSS, no JS, no settings form. Plugin is now pure PHP.

### 1.0.2

- Fix: Replaced transient-based caching with a PHP static variable. The greeting now changes on every page load instead of being held for up to 45 seconds.

### 1.0.1

- Fix: Added direct toolbar node manipulation as a belt-and-suspenders approach, ensuring the greeting is replaced on all WordPress versions and locales, not just English installs.

### 1.0.0

- Initial release.
- 100+ languages supported.
- Settings page with tooltip options.
- Full greeting reference table.

---

## Upgrade Notice

### 1.0.0

Initial release.

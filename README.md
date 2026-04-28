<p align="center">
  <img src="https://www.seven.io/wp-content/uploads/Logo.svg" width="250" alt="seven logo" />
</p>

<h1 align="center">seven SMS for Drupal 8</h1>

<p align="center">
  Send SMS notifications and bulk messages to your Drupal 8 users via the seven gateway.
</p>

<p align="center">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-teal.svg" alt="MIT License" /></a>
  <img src="https://img.shields.io/badge/Drupal-8.x-blue" alt="Drupal 8.x" />
  <img src="https://img.shields.io/badge/PHP-7.2%2B-purple" alt="PHP 7.2+" />
  <a href="https://packagist.org/packages/seven.io/drupal8"><img src="https://img.shields.io/packagist/v/seven.io/drupal8" alt="Packagist" /></a>
</p>

> **Looking for Drupal 9, 10 or 11?** Use [`seven-io/drupal10`](https://github.com/seven-io/drupal10) instead. This module targets the legacy Drupal 8 line.

---

## Features

- **Send SMS** - Single or bulk SMS to Drupal users from the admin
- **Voice Calls** - Place text-to-speech calls
- **Phone-Number Lookups** - HLR, MNP, CNAM and number-format lookups

## Prerequisites

- Drupal 8.x
- PHP 7.2+
- A [seven account](https://www.seven.io/) with API key ([How to get your API key](https://help.seven.io/en/developer/where-do-i-find-my-api-key))

## Installation

### Composer (recommended)

```bash
composer require seven.io/drupal8
```

### Manual

Download the [latest release](https://github.com/seven-io/drupal8/releases/latest), extract it into `web/modules/contrib/seven` and enable the module via **Extend** in the Drupal admin.

## Configuration

In the Drupal admin navigate to the seven configuration page, paste your API key and save. You can now access SMS, voice and lookup tools from the toolbar.

## Support

Need help? Feel free to [contact us](https://www.seven.io/en/company/contact/) or [open an issue](https://github.com/seven-io/drupal8/issues).

## License

[MIT](LICENSE)

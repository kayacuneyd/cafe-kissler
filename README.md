# Café Kissler Website

PHP tabanlı, Tailwind CSS (CDN) kullanan kurumsal vitrin sitesi.

## Özellikler

- Ana sayfa + 5 alt sayfa:
  - `index.php`
  - `pages/cafe.php`
  - `pages/baeckerei.php`
  - `pages/sondertorten.php`
  - `pages/ueber-uns.php`
  - `pages/kontakt.php`
- Reusable PHP componentleri (`components/`)
- Veri dosyaları ile menü ve açılış saatleri (`data/`)
- Tailwind CSS CDN ile modern arayüz

## Kurulum (Local)

1. PHP 7.4+ yüklü olduğundan emin olun.
2. Bu klasörü bir web root altına kopyalayın veya:
   ```bash
   cd /path/to/cafe-kissler
   php -S localhost:8000
   ```
3. Tarayıcıdan `http://localhost:8000` adresine gidin.

## Shared Hosting Deploy

1. Tüm dosyaları hosting hesabınızdaki web root klasörüne (örneğin `htdocs/` veya `public_html/`) yükleyin.
2. `index.php` kök dizinde kalmalıdır.
3. (Opsiyonel) HTTPS yönlendirmesi ve caching için hosting paneliniz üzerinden `.htaccess` yapılandırabilirsiniz.

## Test Önerileri

- Farklı ekran boyutlarında (mobil, tablet, desktop) tüm sayfaları kontrol edin.
- Navigasyon ve mobil menünün sorunsuz çalıştığından emin olun.
- Formlarda zorunlu alanları boş bırakarak client-side validasyonu test edin.
- `sitemap.php` ve `robots.txt` dosyalarının tarayıcıdan erişilebilir olduğunu doğrulayın.

## Notlar

- Tailwind CSS, CDN üzerinden yüklendiği için ekstra build adımı yoktur.
- Görsel dosyaları için `assets/images` altındaki klasör yapısını kullanın.


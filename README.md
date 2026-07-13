# Tuzan Bileme Web Sitesi

Bu proje, **Tuzan Bileme** firmasının tanıtım ve iletişim ihtiyaçları için hazırlanmış, PHP tabanlı statik/dinamik içerik karışımı bir kurumsal web sitesidir.

## Projenin Amacı

Site; firmanın:
- hizmetlerini,
- kullanılan makinelerini,
- ürün gruplarını,
- kurumsal tanıtım metnini
ziyaretçilere sunar ve iletişim sayfası üzerinden mesaj alınmasını sağlar.

## Teknik Yapı

- **Backend:** Düz PHP (framework yok)
- **Frontend:** HTML + CSS
- **Varlıklar:** SVG görseller (`public_html/img`)
- **Stil dosyaları:** `public_html/style`

Proje, ortak bir sayfa iskeleti kullanır:
- `header.php` → üst bilgi, menü, banner
- `footer.php` → alt bilgi

## Dizin Yapısı

```text
TuzanBilemeWebSitesi/
└── tuzan_bileme_web/
    ├── index.php                  # public_html'e yönlendirme
    └── public_html/
        ├── index.php              # Ana sayfa
        ├── about_us.php           # Hakkımızda
        ├── services.php           # Hizmetlerimiz
        ├── machines.php           # Makineler
        ├── contact_us.php         # İletişim formu + harita
        ├── gonder.php             # Form verisini işler
        ├── mesajlar.txt           # Formdan gelen mesaj kayıtları
        ├── header.php
        ├── footer.php
        ├── img/
        └── style/
```

## Sayfalar ve İçerik

- **Ana Sayfa (`index.php`)**
  Ürün/kategori kartları gösterilir.

- **Hakkımızda (`about_us.php`)**
  Firmanın geçmişi, uzmanlık alanı ve yaklaşımı anlatılır.

- **Hizmetlerimiz (`services.php`)**
  Hizmet görselleri üzerinden tanıtım yapılır.

- **Makineler (`machines.php`)**
  Kullanılan makine türleri görsellerle listelenir.

- **Bize Ulaşın (`contact_us.php`)**
  İletişim formu ve Google Maps gömülü konum bilgisi içerir.

## İletişim Formu Akışı

1. Kullanıcı `contact_us.php` sayfasındaki formu doldurur.
2. Form `POST` ile `gonder.php` dosyasına gönderilir.
3. `gonder.php`, alanları `htmlspecialchars` ile temizler.
4. Mesaj içeriği zaman damgası ile `mesajlar.txt` dosyasına eklenir.
5. Kullanıcı tekrar iletişim sayfasına yönlendirilir.

## Yerel Çalıştırma

Proje PHP ile çalıştırılabilir. Örnek:

```bash
cd tuzan_bileme_web
php -S localhost:8000
```

Ardından tarayıcıdan:

- `http://localhost:8000` (yönlendirme ile site açılır)
- veya doğrudan `http://localhost:8000/public_html/`

## Notlar

- Bu proje veritabanı kullanmaz; iletişim kayıtları `mesajlar.txt` içinde tutulur.
- Üretim ortamında `mesajlar.txt` dosya izinleri güvenli şekilde yapılandırılmalıdır.
- Form verilerinin dosyada tutulması yerine uzun vadede veritabanına taşınması önerilir.
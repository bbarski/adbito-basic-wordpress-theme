# Adbito Basic Theme

🇬🇧 *English version below*  
🇵🇱 *Polska wersja poniżej*

---

## 🇵🇱 Polski

Lekki i konfigurowalny motyw. Zaprojektowany z myślą o wydajności, prostocie i szybkim tworzeniu motywów bez zbędnych dodatków.

### Wymagania

- WordPress 6.0 lub nowszy  


### Instalacja

```bash
git clone https://github.com/bbarski/adbito-basic-wordpress-theme.git wp-content/themes/adbito-basic-wordpress-theme
```


Następnie aktywuj motyw w panelu WordPress lub przez WP-CLI:

```bash
wp theme activate adbito-basic-wordpress-theme
```

### Struktura

- `functions.php` – rejestruje style i logikę
- `style.css` – metadane motywu i style bazowe
- `screenshot.png` – opcjonalny podgląd motywu
- `inc/` – własne moduły PHP
- `assets/` – style, skrypty lub obrazy

### Dostosowanie

Motyw pozwala na:

- Tworzenie layoutów wewłasnym stylu
- Dodawanie hooków i filtrów WordPressa

Strukturę można dowolnie rozszerzać zgodnie z potrzebami projektu.

### Rozwój

Świetny do szybkiego prototypowania i lekkich stron WordPress. Czytelny kod i minimalne użycie JavaScriptu.

### Licencja

[GPLv2](LICENSE)

---

## 🇬🇧 English

A lightweight, customizable child theme for WordPress, built on top of the [`starter-theme`](https://github.com/bbarski/starter-theme). Designed for performance, simplicity, and easy theme development without unnecessary bloat.

### Requirements

- WordPress 6.0 or higher  
- Parent theme: [`starter-theme`](https://github.com/bbarski/starter-theme) (must be installed and active)

### Installation

```bash
git clone https://github.com/bbarski/adbito-child-starter-theme.git wp-content/themes/adbito-child-starter-theme
```

Make sure the `starter-theme` is located in `wp-content/themes/`.

Then activate the theme via the WordPress dashboard or using WP-CLI:

```bash
wp theme activate adbito-child-starter-theme
```

### Structure

- `functions.php` – registers styles and adds custom logic
- `style.css` – child theme metadata and basic styles
- `screenshot.png` – optional theme preview
- `inc/` – for custom PHP modules
- `assets/` – for styles, scripts, or images

### Customization

This theme allows you to:

- Build layouts with Tailwind CSS or your own
- Override templates from the parent theme
- Add WordPress hooks or filters as needed

You can freely extend the theme structure for your use case.

### Development

Great for fast prototyping and minimal WordPress websites that don’t rely on visual builders. Clean and readable code. Minimal JS by design.

### License

[GPLv2](LICENSE)

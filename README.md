# Seokar-plus
Seokar wordpress theme ill
عالیه! حالا قدم‌به‌قدم از نصب Composer تا راه‌اندازی پروژه پیش می‌رویم.


---

✅ مرحله ۱: بررسی نصب Composer

ابتدا بررسی کن که Composer نصب است یا نه:

1. ترمینال (CMD یا PowerShell) را باز کن.


2. این دستور را اجرا کن:

composer -V


3. اگر نسخه Composer نمایش داده شد، یعنی نصب است و می‌توانی ادامه دهی. اگر نه، باید آن را نصب کنی.



➜ اگر نصب نبود، از اینجا دانلود و نصب کن:
🔗 دانلود Composer


---

✅ مرحله ۲: ایجاد فایل composer.json

1. در پوشه قالب وردپرس (theme-name/) این دستور را اجرا کن:

composer init


2. Composer از تو یک سری سوال می‌پرسد، این تنظیمات را وارد کن:

Package name: sajjadakbari/theme-name

Description: A modern and professional WordPress theme

Author: Sajjad Akbari <your-email@example.com>

Minimum Stability: stable

License: GPL-2.0-or-later

Would you like to define dependencies? no (چون بعداً دستی اضافه می‌کنیم)



3. بعد از پایان، فایل composer.json در پوشه قالب ایجاد می‌شود.




---

✅ مرحله ۳: اضافه کردن وابستگی‌ها

حالا این دستورات را اجرا کن تا کتابخانه‌های موردنیاز نصب شوند:

composer require illuminate/support symfony/var-dumper

این باعث می‌شود Laravel Support و Symfony Var Dumper به قالب اضافه شوند.


---

✅ مرحله ۴: راه‌اندازی autoload.php

بعد از نصب، باید autoload.php را در functions.php قالب بارگذاری کنی. این خط را به ابتدای functions.php اضافه کن:

require_once get_template_directory() . '/vendor/autoload.php';


---

✅ مرحله ۵: بررسی نصب و تست اولیه

1. بررسی کن که پوشه vendor/ ایجاد شده باشد.


2. فایل composer.lock باید ساخته شده باشد.


3. برای تست، این خط را در functions.php اضافه کن و صفحه سایت را رفرش کن:

use Illuminate\Support\Str;
echo Str::slug('Hello World!'); // خروجی: hello-world


4. اگر خطایی نداشتی و خروجی hello-world را دیدی، یعنی Composer به‌درستی کار می‌کند! 🎉




---

✅ مرحله ۶: بهینه‌سازی Composer

در آخر، این دستور را اجرا کن تا autoload بهینه شود:

composer dump-autoload -o


---

✅ حالا پروژه کاملاً آماده است و می‌توانی توسعه را ادامه دهی. 🚀
اگر سوالی داشتی، بپرس!


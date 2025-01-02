let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

// Đường dẫn đến thư mục build
mix.setPublicPath('./assets/css');

// Biên dịch SCSS với TailwindCSS
mix.sass('assets/css/admin.scss', 'admin.css')
  .sass('assets/css/frontend.scss', 'frontend.css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.config.js')],
  });

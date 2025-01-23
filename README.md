<p align="center">
    <img src="https://raw.githubusercontent.com/PKief/vscode-material-icon-theme/ec559a9f6bfd399b82bb44393651661b08aaf7ba/icons/folder-markdown-open.svg" align="center" width="30%">
</p>
<p align="center"><h1 align="center">FSI-APP</h1></p>
<p align="center">
	<em><code>❯ REPLACE-ME</code></em>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/f3brysan/fsi-app?style=default&logo=opensourceinitiative&logoColor=white&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/f3brysan/fsi-app?style=default&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/f3brysan/fsi-app?style=default&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/f3brysan/fsi-app?style=default&color=0080ff" alt="repo-language-count">
</p>
<p align="center"><!-- default option, no dependency badges. -->
</p>
<p align="center">
	<!-- default option, no dependency badges. -->
</p>
<br>

##  Table of Contents

- [ Overview](#-overview)
- [ Features](#-features)
- [ Project Structure](#-project-structure)
  - [ Project Index](#-project-index)
- [ Getting Started](#-getting-started)
  - [ Prerequisites](#-prerequisites)
  - [ Installation](#-installation)
  - [ Usage](#-usage)
  - [ Testing](#-testing)
- [ Project Roadmap](#-project-roadmap)
- [ Contributing](#-contributing)
- [ License](#-license)
- [ Acknowledgments](#-acknowledgments)

---

##  Overview

<code>❯ REPLACE-ME</code>

---

##  Features

<code>❯ REPLACE-ME</code>

---

##  Project Structure

```sh
└── fsi-app/
    ├── README.md
    ├── app
    │   ├── Console
    │   │   └── Kernel.php
    │   ├── Exceptions
    │   │   └── Handler.php
    │   ├── Http
    │   │   ├── Controllers
    │   │   │   ├── AnggotaKomunitasController.php
    │   │   │   ├── AttendantController.php
    │   │   │   ├── BiodataController.php
    │   │   │   ├── Controller.php
    │   │   │   ├── DashboardController.php
    │   │   │   ├── EventController.php
    │   │   │   ├── IndoRegionController.php
    │   │   │   ├── KomunitasController.php
    │   │   │   ├── LoginController.php
    │   │   │   ├── MotorController.php
    │   │   │   ├── PengpusAnggotaController.php
    │   │   │   ├── PengpusEventController.php
    │   │   │   ├── PengpusGiftController.php
    │   │   │   ├── PoinController.php
    │   │   │   ├── RedeemController.php
    │   │   │   ├── RegionalController.php
    │   │   │   └── RegisterController.php
    │   │   ├── Kernel.php
    │   │   ├── Middleware
    │   │   │   ├── Authenticate.php
    │   │   │   ├── EncryptCookies.php
    │   │   │   ├── PreventRequestsDuringMaintenance.php
    │   │   │   ├── RedirectIfAuthenticated.php
    │   │   │   ├── TrimStrings.php
    │   │   │   ├── TrustHosts.php
    │   │   │   ├── TrustProxies.php
    │   │   │   └── VerifyCsrfToken.php
    │   │   └── Requests
    │   │       ├── StoreAnggotaKomunitasRequest.php
    │   │       ├── StoreBiodataRequest.php
    │   │       ├── StoreEventRequest.php
    │   │       ├── StoreMotorRequest.php
    │   │       ├── UpdateAnggotaKomunitasRequest.php
    │   │       ├── UpdateBiodataRequest.php
    │   │       ├── UpdateEventRequest.php
    │   │       └── UpdateMotorRequest.php
    │   ├── Models
    │   │   ├── AnggotaKomunitas.php
    │   │   ├── Attendant.php
    │   │   ├── Biodata.php
    │   │   ├── District.php
    │   │   ├── Event.php
    │   │   ├── Gift.php
    │   │   ├── Komunitas.php
    │   │   ├── Motor.php
    │   │   ├── Poin.php
    │   │   ├── Province.php
    │   │   ├── Redeem.php
    │   │   ├── Regency.php
    │   │   ├── Regional.php
    │   │   ├── Register.php
    │   │   ├── User.php
    │   │   └── Village.php
    │   ├── Policies
    │   │   ├── AnggotaKomunitasPolicy.php
    │   │   ├── BiodataPolicy.php
    │   │   ├── EventPolicy.php
    │   │   ├── KomunitasPolicy.php
    │   │   └── MotorPolicy.php
    │   └── Providers
    │       ├── AppServiceProvider.php
    │       ├── AuthServiceProvider.php
    │       ├── BroadcastServiceProvider.php
    │       ├── EventServiceProvider.php
    │       └── RouteServiceProvider.php
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   └── cache
    │       └── .gitignore
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── broadcasting.php
    │   ├── cache.php
    │   ├── captcha.php
    │   ├── cors.php
    │   ├── database.php
    │   ├── datatables.php
    │   ├── filesystems.php
    │   ├── hashing.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── permission.php
    │   ├── queue.php
    │   ├── sanctum.php
    │   ├── services.php
    │   ├── session.php
    │   └── view.php
    ├── database
    │   ├── .gitignore
    │   ├── factories
    │   │   ├── AnggotaKomunitasFactory.php
    │   │   ├── BiodataFactory.php
    │   │   ├── EventFactory.php
    │   │   ├── KomunitasFactory.php
    │   │   ├── MotorFactory.php
    │   │   └── UserFactory.php
    │   ├── migrations
    │   │   ├── 2014_10_12_000000_create_users_table.php
    │   │   ├── 2014_10_12_100000_create_password_resets_table.php
    │   │   ├── 2017_05_02_140432_create_provinces_tables.php
    │   │   ├── 2017_05_02_140444_create_regencies_tables.php
    │   │   ├── 2017_05_02_142019_create_districts_tables.php
    │   │   ├── 2017_05_02_143454_create_villages_tables.php
    │   │   ├── 2019_08_19_000000_create_failed_jobs_table.php
    │   │   ├── 2019_12_14_000001_create_personal_access_tokens_table.php
    │   │   ├── 2022_05_09_202103_create_regionals_table.php
    │   │   ├── 2022_05_14_094837_create_komunitas_table.php
    │   │   ├── 2022_05_17_230244_add_soft_delete_to_komunitas_table.php
    │   │   ├── 2022_05_20_015936_create_events_table.php
    │   │   ├── 2022_06_03_032237_create_biodatas_table.php
    │   │   ├── 2022_06_03_034834_add_picture_to_biodata.php
    │   │   ├── 2022_06_13_031819_create_motors_table.php
    │   │   ├── 2022_06_18_174053_create_anggota_komunitas_table.php
    │   │   ├── 2022_06_28_032440_create_attendants_table.php
    │   │   ├── 2022_06_30_032313_create_gifts_table.php
    │   │   ├── 2022_06_30_033909_add_slug_to_gifts.php
    │   │   ├── 2022_07_01_033505_create_redeems_table.php
    │   │   └── 2022_07_14_152903_create_permission_tables.php
    │   └── seeders
    │       ├── AnggotaKomunitasSeeder.php
    │       ├── BiodataSeeder.php
    │       ├── DatabaseSeeder.php
    │       ├── EventSeeder.php
    │       ├── IndoRegionDistrictSeeder.php
    │       ├── IndoRegionProvinceSeeder.php
    │       ├── IndoRegionRegencySeeder.php
    │       ├── IndoRegionSeeder.php
    │       ├── IndoRegionVillageSeeder.php
    │       ├── KomunitasSeeder.php
    │       ├── MotorSeeder.php
    │       └── User.php
    ├── package-lock.json
    ├── package.json
    ├── phpunit.xml
    ├── public
    │   ├── .htaccess
    │   ├── assets
    │   │   ├── css
    │   │   │   ├── app-dark-rtl.min.css
    │   │   │   ├── app-dark-rtl.min.css.map
    │   │   │   ├── app-dark.css
    │   │   │   ├── app-dark.min.css
    │   │   │   ├── app-dark.min.css.map
    │   │   │   ├── app-rtl.min.css
    │   │   │   ├── app-rtl.min.css.map
    │   │   │   ├── app.css
    │   │   │   ├── app.min.css
    │   │   │   ├── app.min.css.map
    │   │   │   ├── bootstrap-dark-rtl.min.css
    │   │   │   ├── bootstrap-dark-rtl.min.css.map
    │   │   │   ├── bootstrap-dark.css
    │   │   │   ├── bootstrap-dark.min.css
    │   │   │   ├── bootstrap-dark.min.css.map
    │   │   │   ├── bootstrap-rtl.min.css
    │   │   │   ├── bootstrap-rtl.min.css.map
    │   │   │   ├── bootstrap.css
    │   │   │   ├── bootstrap.min.css
    │   │   │   ├── bootstrap.min.css.map
    │   │   │   ├── icons-rtl.min.css
    │   │   │   ├── icons-rtl.min.css.map
    │   │   │   ├── icons.css
    │   │   │   ├── icons.min.css
    │   │   │   └── icons.min.css.map
    │   │   ├── fonts
    │   │   │   ├── dripicons-v2.eot
    │   │   │   ├── dripicons-v2.svg
    │   │   │   ├── dripicons-v2.ttf
    │   │   │   ├── dripicons-v2.woff
    │   │   │   ├── fa-brands-400.eot
    │   │   │   ├── fa-brands-400.svg
    │   │   │   ├── fa-brands-400.ttf
    │   │   │   ├── fa-brands-400.woff
    │   │   │   ├── fa-brands-400.woff2
    │   │   │   ├── fa-regular-400.eot
    │   │   │   ├── fa-regular-400.svg
    │   │   │   ├── fa-regular-400.ttf
    │   │   │   ├── fa-regular-400.woff
    │   │   │   ├── fa-regular-400.woff2
    │   │   │   ├── fa-solid-900.eot
    │   │   │   ├── fa-solid-900.svg
    │   │   │   ├── fa-solid-900.ttf
    │   │   │   ├── fa-solid-900.woff
    │   │   │   ├── fa-solid-900.woff2
    │   │   │   ├── inter-bold.woff
    │   │   │   ├── inter-bold.woff2
    │   │   │   ├── inter-light.woff
    │   │   │   ├── inter-light.woff2
    │   │   │   ├── inter-medium.woff
    │   │   │   ├── inter-medium.woff2
    │   │   │   ├── inter-regular.woff
    │   │   │   ├── inter-regular.woff2
    │   │   │   ├── materialdesignicons-webfont.eot
    │   │   │   ├── materialdesignicons-webfont.ttf
    │   │   │   ├── materialdesignicons-webfont.woff
    │   │   │   ├── materialdesignicons-webfont.woff2
    │   │   │   ├── remixicon.eot
    │   │   │   ├── remixicon.svg
    │   │   │   ├── remixicon.symbol.svg
    │   │   │   ├── remixicon.ttf
    │   │   │   ├── remixicon.woff
    │   │   │   └── remixicon.woff2
    │   │   ├── images
    │   │   │   ├── _auth-bg.jpg
    │   │   │   ├── _favicon.ico
    │   │   │   ├── _fsi-logo-dark.png
    │   │   │   ├── android-chrome-192x192.png
    │   │   │   ├── android-chrome-512x512.png
    │   │   │   ├── apple-touch-icon.png
    │   │   │   ├── auth-bg.jpg
    │   │   │   ├── brands
    │   │   │   │   ├── bitbucket.png
    │   │   │   │   ├── dribbble.png
    │   │   │   │   ├── dropbox.png
    │   │   │   │   ├── github.png
    │   │   │   │   ├── mail_chimp.png
    │   │   │   │   └── slack.png
    │   │   │   ├── browserconfig.xml
    │   │   │   ├── companies
    │   │   │   │   ├── img-1.png
    │   │   │   │   ├── img-2.png
    │   │   │   │   ├── img-3.png
    │   │   │   │   ├── img-4.png
    │   │   │   │   ├── img-5.png
    │   │   │   │   ├── img-6.png
    │   │   │   │   ├── img-7.png
    │   │   │   │   └── img-8.png
    │   │   │   ├── favicon-16x16.png
    │   │   │   ├── favicon-32x32.png
    │   │   │   ├── favicon2.ico
    │   │   │   ├── flags
    │   │   │   │   ├── french.jpg
    │   │   │   │   ├── germany.jpg
    │   │   │   │   ├── italy.jpg
    │   │   │   │   ├── russia.jpg
    │   │   │   │   ├── select2
    │   │   │   │   ├── spain.jpg
    │   │   │   │   └── us.jpg
    │   │   │   ├── fsi-logo-all.png
    │   │   │   ├── fsi-logo-dark.png
    │   │   │   ├── fsi-logo-light.png
    │   │   │   ├── layouts
    │   │   │   │   ├── layout-1.jpg
    │   │   │   │   ├── layout-2.jpg
    │   │   │   │   └── layout-3.jpg
    │   │   │   ├── logo-dark.png
    │   │   │   ├── logo-light.png
    │   │   │   ├── logo-sm.png
    │   │   │   ├── megamenu-img.png
    │   │   │   ├── mstile-150x150.png
    │   │   │   ├── product
    │   │   │   │   ├── img-1.png
    │   │   │   │   ├── img-2.png
    │   │   │   │   ├── img-3.png
    │   │   │   │   ├── img-4.png
    │   │   │   │   ├── img-5.png
    │   │   │   │   └── img-6.png
    │   │   │   ├── safari-pinned-tab.svg
    │   │   │   ├── site.webmanifest
    │   │   │   ├── small
    │   │   │   │   ├── img-1.jpg
    │   │   │   │   ├── img-2.jpg
    │   │   │   │   ├── img-3.jpg
    │   │   │   │   ├── img-4.jpg
    │   │   │   │   ├── img-5.jpg
    │   │   │   │   ├── img-6.jpg
    │   │   │   │   └── img-7.jpg
    │   │   │   └── users
    │   │   │       ├── avatar-1.jpg
    │   │   │       ├── avatar-2.jpg
    │   │   │       ├── avatar-3.jpg
    │   │   │       ├── avatar-4.jpg
    │   │   │       ├── avatar-5.jpg
    │   │   │       ├── avatar-6.jpg
    │   │   │       ├── avatar-7.jpg
    │   │   │       └── avatar-8.jpg
    │   │   ├── js
    │   │   │   ├── app.js
    │   │   │   └── pages
    │   │   │       ├── apexcharts.init.js
    │   │   │       ├── calendar.init.js
    │   │   │       ├── chartjs.init.js
    │   │   │       ├── coming-soon.init.js
    │   │   │       ├── dashboard.init.js
    │   │   │       ├── datatables.init.js
    │   │   │       ├── ecommerce-add-product.init.js
    │   │   │       ├── ecommerce-cart.init.js
    │   │   │       ├── ecommerce-checkout.init.js
    │   │   │       ├── ecommerce-customer-datatables.init.js
    │   │   │       ├── ecommerce-order-datatables.init.js
    │   │   │       ├── flot.init.js
    │   │   │       ├── fontawesome.init.js
    │   │   │       ├── form-advanced.init.js
    │   │   │       ├── form-editor.init.js
    │   │   │       ├── form-element.init.js
    │   │   │       ├── form-mask.init.js
    │   │   │       ├── form-validation.init.js
    │   │   │       ├── form-wizard.init.js
    │   │   │       ├── form-xeditable.init.js
    │   │   │       ├── gmaps.init.js
    │   │   │       ├── jquery-knob.init.js
    │   │   │       ├── kanban.init.js
    │   │   │       ├── lightbox.init.js
    │   │   │       ├── materialdesign.init.js
    │   │   │       ├── product-filter-range.init.js
    │   │   │       ├── range-sliders.init.js
    │   │   │       ├── rating-init.js
    │   │   │       ├── remix-icons-list.js
    │   │   │       ├── roundslider.init.js
    │   │   │       ├── session-timeout.init.js
    │   │   │       ├── sparklines.init.js
    │   │   │       ├── sweet-alerts.init.js
    │   │   │       ├── table-editable.init.js
    │   │   │       ├── table-responsive.init.js
    │   │   │       ├── toastr.init.js
    │   │   │       └── vector-maps.init.js
    │   │   └── libs
    │   │       ├── @chenfengyuan
    │   │       │   └── datepicker
    │   │       ├── @curiosityx
    │   │       │   └── bootstrap-session-timeout
    │   │       ├── @fullcalendar
    │   │       │   ├── bootstrap
    │   │       │   ├── core
    │   │       │   ├── daygrid
    │   │       │   ├── interaction
    │   │       │   └── timegrid
    │   │       ├── admin-resources
    │   │       │   ├── bootstrap-filestyle
    │   │       │   ├── jquery.vectormap
    │   │       │   └── rwd-table
    │   │       ├── apexcharts
    │   │       │   ├── apexcharts.amd.js
    │   │       │   ├── apexcharts.common.js
    │   │       │   ├── apexcharts.css
    │   │       │   ├── apexcharts.esm.js
    │   │       │   ├── apexcharts.min.js
    │   │       │   └── locales
    │   │       ├── bootstrap
    │   │       │   ├── css
    │   │       │   └── js
    │   │       ├── bootstrap-datepicker
    │   │       │   ├── css
    │   │       │   ├── js
    │   │       │   └── locales
    │   │       ├── bootstrap-editable
    │   │       │   ├── css
    │   │       │   ├── img
    │   │       │   └── js
    │   │       ├── bootstrap-filestyle2
    │   │       │   ├── LICENSE-MIT
    │   │       │   └── bootstrap-filestyle.jquery.json
    │   │       ├── bootstrap-maxlength
    │   │       │   └── bootstrap-maxlength.min.js
    │   │       ├── bootstrap-rating
    │   │       │   ├── bootstrap-rating.css
    │   │       │   ├── bootstrap-rating.min.js
    │   │       │   ├── deploy.txt
    │   │       │   └── index.html
    │   │       ├── bootstrap-timepicker
    │   │       │   ├── css
    │   │       │   └── js
    │   │       ├── bootstrap-touchspin
    │   │       │   ├── jquery.bootstrap-touchspin.min.css
    │   │       │   └── jquery.bootstrap-touchspin.min.js
    │   │       ├── bs-custom-file-input
    │   │       │   └── bs-custom-file-input.min.js
    │   │       ├── chance
    │   │       │   └── chance.min.js
    │   │       ├── chart.js
    │   │       │   ├── Chart.bundle.min.js
    │   │       │   ├── Chart.min.css
    │   │       │   └── Chart.min.js
    │   │       ├── datatables.net
    │   │       │   ├── License.txt
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-autofill
    │   │       │   ├── License.txt
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-autofill-bs4
    │   │       │   ├── css
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-bs4
    │   │       │   ├── css
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-buttons
    │   │       │   ├── License.txt
    │   │       │   ├── js
    │   │       │   ├── node_modules
    │   │       │   └── swf
    │   │       ├── datatables.net-buttons-bs4
    │   │       │   ├── css
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-keytable
    │   │       │   ├── License.txt
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-keytable-bs4
    │   │       │   ├── css
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-responsive
    │   │       │   ├── License.txt
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-responsive-bs4
    │   │       │   ├── css
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-select
    │   │       │   ├── License.txt
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── datatables.net-select-bs4
    │   │       │   ├── css
    │   │       │   ├── js
    │   │       │   └── node_modules
    │   │       ├── dragula
    │   │       │   ├── dragula.min.css
    │   │       │   └── dragula.min.js
    │   │       ├── dropzone
    │   │       │   ├── basic.css
    │   │       │   ├── dropzone-amd-module.js
    │   │       │   ├── dropzone.css
    │   │       │   ├── dropzone.js
    │   │       │   └── min
    │   │       ├── echarts
    │   │       │   ├── echarts-en.common.min.js
    │   │       │   ├── echarts-en.min.js
    │   │       │   ├── echarts-en.simple.min.js
    │   │       │   ├── echarts.common.min.js
    │   │       │   ├── echarts.min.js
    │   │       │   ├── echarts.simple.min.js
    │   │       │   └── extension
    │   │       ├── flot-charts
    │   │       │   ├── LICENSE.txt
    │   │       │   ├── Makefile
    │   │       │   ├── component.json
    │   │       │   ├── excanvas.min.js
    │   │       │   ├── flot.jquery.json
    │   │       │   ├── jquery.colorhelpers.js
    │   │       │   ├── jquery.flot.canvas.js
    │   │       │   ├── jquery.flot.categories.js
    │   │       │   ├── jquery.flot.crosshair.js
    │   │       │   ├── jquery.flot.errorbars.js
    │   │       │   ├── jquery.flot.fillbetween.js
    │   │       │   ├── jquery.flot.image.js
    │   │       │   ├── jquery.flot.js
    │   │       │   ├── jquery.flot.navigate.js
    │   │       │   ├── jquery.flot.pie.js
    │   │       │   ├── jquery.flot.resize.js
    │   │       │   ├── jquery.flot.selection.js
    │   │       │   ├── jquery.flot.stack.js
    │   │       │   ├── jquery.flot.symbol.js
    │   │       │   ├── jquery.flot.threshold.js
    │   │       │   ├── jquery.flot.time.js
    │   │       │   └── jquery.js
    │   │       ├── flot.curvedlines
    │   │       │   ├── curvedLines.js
    │   │       │   ├── docu
    │   │       │   ├── exampleCustomizing.txt
    │   │       │   ├── exampleFillMultiAxis.txt
    │   │       │   ├── exampleFit.txt
    │   │       │   ├── exampleHelperPoints.txt
    │   │       │   ├── exampleStackedData.txt
    │   │       │   └── flot
    │   │       ├── gmaps
    │   │       │   ├── gmaps.min.js
    │   │       │   ├── jsdoc.json
    │   │       │   ├── lib
    │   │       │   └── umd.hbs
    │   │       ├── gulp-rtlcss
    │   │       │   ├── index.js
    │   │       │   └── test.js
    │   │       ├── inputmask
    │   │       │   ├── bindings
    │   │       │   ├── inputmask.min.js
    │   │       │   └── jquery.inputmask.min.js
    │   │       ├── ion-rangeslider
    │   │       │   ├── css
    │   │       │   └── js
    │   │       ├── jquery
    │   │       │   ├── jquery.min.js
    │   │       │   └── jquery.slim.min.js
    │   │       ├── jquery-countdown
    │   │       │   └── jquery.countdown.min.js
    │   │       ├── jquery-knob
    │   │       │   └── jquery.knob.min.js
    │   │       ├── jquery-sparkline
    │   │       │   ├── Changelog.txt
    │   │       │   ├── build.js
    │   │       │   └── jquery.sparkline.min.js
    │   │       ├── jquery-steps
    │   │       │   ├── LICENSE.txt
    │   │       │   ├── build
    │   │       │   ├── lib
    │   │       │   ├── nuget
    │   │       │   └── steps.jquery.json
    │   │       ├── jquery-ui-dist
    │   │       │   ├── AUTHORS.txt
    │   │       │   ├── LICENSE.txt
    │   │       │   ├── external
    │   │       │   ├── images
    │   │       │   ├── index.html
    │   │       │   ├── jquery-ui.min.css
    │   │       │   ├── jquery-ui.min.js
    │   │       │   ├── jquery-ui.structure.min.css
    │   │       │   └── jquery-ui.theme.min.css
    │   │       ├── jquery-validation
    │   │       │   ├── additional-methods.min.js
    │   │       │   ├── jquery.validate.min.js
    │   │       │   └── localization
    │   │       ├── jquery.easing
    │   │       │   ├── bower_components
    │   │       │   ├── jquery.easing.compatibility.js
    │   │       │   └── jquery.easing.min.js
    │   │       ├── jquery.flot.tooltip
    │   │       │   └── js
    │   │       ├── jquery.repeater
    │   │       │   ├── complex-repeater.html
    │   │       │   ├── gruntfile.js
    │   │       │   ├── index.html
    │   │       │   ├── index.pre.html
    │   │       │   ├── jquery-1.11.1.js
    │   │       │   ├── jquery.repeater.min.js
    │   │       │   ├── nested-repeater.html
    │   │       │   ├── repeater.html
    │   │       │   ├── repeater.jquery.json
    │   │       │   └── test-post-parse.php
    │   │       ├── jszip
    │   │       │   └── jszip.min.js
    │   │       ├── leaflet
    │   │       │   ├── images
    │   │       │   ├── leaflet-src.esm.js
    │   │       │   ├── leaflet-src.js
    │   │       │   ├── leaflet.css
    │   │       │   └── leaflet.js
    │   │       ├── magnific-popup
    │   │       │   ├── jquery.magnific-popup.min.js
    │   │       │   └── magnific-popup.css
    │   │       ├── masonry-layout
    │   │       │   └── masonry.pkgd.min.js
    │   │       ├── metismenu
    │   │       │   ├── cjs
    │   │       │   ├── metisMenu.min.css
    │   │       │   ├── metisMenu.min.js
    │   │       │   └── modules
    │   │       ├── moment
    │   │       │   ├── ender.js
    │   │       │   ├── locale
    │   │       │   ├── min
    │   │       │   ├── moment.js
    │   │       │   └── package.js
    │   │       ├── node-waves
    │   │       │   ├── waves.min.css
    │   │       │   └── waves.min.js
    │   │       ├── owl.carousel
    │   │       │   ├── assets
    │   │       │   ├── owl.carousel.js
    │   │       │   └── owl.carousel.min.js
    │   │       ├── parsleyjs
    │   │       │   ├── i18n
    │   │       │   └── parsley.min.js
    │   │       ├── pdfmake
    │   │       │   ├── build
    │   │       │   └── webpack-standardfonts.config.js
    │   │       ├── round-slider
    │   │       │   ├── roundslider.min.css
    │   │       │   └── roundslider.min.js
    │   │       ├── select2
    │   │       │   ├── css
    │   │       │   └── js
    │   │       ├── simplebar
    │   │       │   ├── simplebar.esm.js
    │   │       │   ├── simplebar.min.css
    │   │       │   └── simplebar.min.js
    │   │       ├── spectrum-colorpicker2
    │   │       │   ├── spectrum.min.css
    │   │       │   └── spectrum.min.js
    │   │       ├── sweetalert2
    │   │       │   ├── sweetalert2.all.min.js
    │   │       │   ├── sweetalert2.min.css
    │   │       │   └── sweetalert2.min.js
    │   │       ├── table-edits
    │   │       │   ├── build
    │   │       │   └── index.html
    │   │       ├── tinymce
    │   │       │   ├── changelog.txt
    │   │       │   ├── icons
    │   │       │   ├── jquery.tinymce.min.js
    │   │       │   ├── license.txt
    │   │       │   ├── plugins
    │   │       │   ├── skins
    │   │       │   ├── themes
    │   │       │   └── tinymce.min.js
    │   │       ├── toastr
    │   │       │   ├── build
    │   │       │   ├── demo.html
    │   │       │   ├── karma.conf.js
    │   │       │   ├── node_modules
    │   │       │   ├── nuget
    │   │       │   ├── toastr-icon.png
    │   │       │   └── toastr.js
    │   │       └── twitter-bootstrap-wizard
    │   │           ├── MIT-LICENSE.txt
    │   │           ├── bootstrap
    │   │           ├── index.html
    │   │           ├── jquery.bootstrap.wizard.min.js
    │   │           ├── prettify.css
    │   │           └── prettify.js
    │   ├── favicon.ico
    │   ├── index.php
    │   └── robots.txt
    ├── resources
    │   ├── css
    │   │   └── app.css
    │   ├── js
    │   │   ├── app.js
    │   │   └── bootstrap.js
    │   ├── lang
    │   │   └── en
    │   │       ├── auth.php
    │   │       ├── pagination.php
    │   │       ├── passwords.php
    │   │       └── validation.php
    │   └── views
    │       ├── auth.blade.php
    │       ├── biodata
    │       │   ├── create.blade.php
    │       │   ├── footer.blade.php
    │       │   ├── join.blade.php
    │       │   ├── navbar.blade.php
    │       │   └── show.blade.php
    │       ├── dashboard.blade.php
    │       ├── event
    │       │   ├── index.blade.php
    │       │   └── show.blade.php
    │       ├── layouts
    │       │   ├── css.blade.php
    │       │   ├── footer.blade.php
    │       │   ├── header.blade.php
    │       │   ├── js.blade.php
    │       │   ├── main.blade.php
    │       │   └── sidebar.blade.php
    │       ├── master
    │       │   ├── adart.blade.php
    │       │   ├── anggota
    │       │   │   ├── create.blade.php
    │       │   │   ├── edit.blade.php
    │       │   │   ├── index.blade.php
    │       │   │   └── show.blade.php
    │       │   ├── event
    │       │   │   ├── create.blade.php
    │       │   │   ├── edit.blade.php
    │       │   │   ├── index.blade.php
    │       │   │   └── show.blade.php
    │       │   ├── gift
    │       │   │   ├── create.blade.php
    │       │   │   ├── edit.blade.php
    │       │   │   └── index.blade.php
    │       │   ├── komunitas
    │       │   │   ├── create.blade.php
    │       │   │   ├── edit.blade.php
    │       │   │   ├── index.blade.php
    │       │   │   └── show.blade.php
    │       │   └── regional
    │       │       ├── create.blade.php
    │       │       ├── edit.blade.php
    │       │       └── index.blade.php
    │       ├── poin
    │       │   ├── gift.blade.php
    │       │   └── poin.blade.php
    │       ├── register.blade.php
    │       └── welcome.blade.php
    ├── routes
    │   ├── api.php
    │   ├── channels.php
    │   ├── console.php
    │   └── web.php
    ├── server.php
    ├── storage
    │   ├── app
    │   │   ├── .gitignore
    │   │   └── public
    │   │       └── .gitignore
    │   ├── clockwork
    │   │   └── .gitignore
    │   ├── framework
    │   │   ├── .gitignore
    │   │   ├── cache
    │   │   │   ├── .gitignore
    │   │   │   └── data
    │   │   │       └── .gitignore
    │   │   ├── sessions
    │   │   │   └── .gitignore
    │   │   ├── testing
    │   │   │   └── .gitignore
    │   │   └── views
    │   │       └── .gitignore
    │   └── logs
    │       └── .gitignore
    ├── tests
    │   ├── CreatesApplication.php
    │   ├── Feature
    │   │   └── ExampleTest.php
    │   ├── TestCase.php
    │   └── Unit
    │       └── ExampleTest.php
    └── webpack.mix.js
```


###  Project Index
<details open>
	<summary><b><code>FSI-APP/</code></b></summary>
	<details> <!-- __root__ Submodule -->
		<summary><b>__root__</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/package-lock.json'>package-lock.json</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/artisan'>artisan</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/webpack.mix.js'>webpack.mix.js</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/composer.json'>composer.json</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/server.php'>server.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/package.json'>package.json</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- bootstrap Submodule -->
		<summary><b>bootstrap</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/bootstrap/app.php'>app.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- config Submodule -->
		<summary><b>config</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/filesystems.php'>filesystems.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/logging.php'>logging.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/auth.php'>auth.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/sanctum.php'>sanctum.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/hashing.php'>hashing.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/captcha.php'>captcha.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/cors.php'>cors.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/mail.php'>mail.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/permission.php'>permission.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/session.php'>session.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/cache.php'>cache.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/services.php'>services.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/view.php'>view.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/broadcasting.php'>broadcasting.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/app.php'>app.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/queue.php'>queue.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/database.php'>database.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/config/datatables.php'>datatables.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- resources Submodule -->
		<summary><b>resources</b></summary>
		<blockquote>
			<details>
				<summary><b>css</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/css/app.css'>app.css</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>js</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/js/app.js'>app.js</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/js/bootstrap.js'>bootstrap.js</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>views</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/register.blade.php'>register.blade.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/auth.blade.php'>auth.blade.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/dashboard.blade.php'>dashboard.blade.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/welcome.blade.php'>welcome.blade.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
					<details>
						<summary><b>layouts</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/layouts/main.blade.php'>main.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/layouts/css.blade.php'>css.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/layouts/header.blade.php'>header.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/layouts/footer.blade.php'>footer.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/layouts/js.blade.php'>js.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/layouts/sidebar.blade.php'>sidebar.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
					<details>
						<summary><b>poin</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/poin/poin.blade.php'>poin.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/poin/gift.blade.php'>gift.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
					<details>
						<summary><b>biodata</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/biodata/show.blade.php'>show.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/biodata/join.blade.php'>join.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/biodata/footer.blade.php'>footer.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/biodata/navbar.blade.php'>navbar.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/biodata/create.blade.php'>create.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
					<details>
						<summary><b>event</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/event/show.blade.php'>show.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/event/index.blade.php'>index.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
					<details>
						<summary><b>master</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/adart.blade.php'>adart.blade.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
							<details>
								<summary><b>gift</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/gift/edit.blade.php'>edit.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/gift/index.blade.php'>index.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/gift/create.blade.php'>create.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>komunitas</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/komunitas/edit.blade.php'>edit.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/komunitas/show.blade.php'>show.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/komunitas/index.blade.php'>index.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/komunitas/create.blade.php'>create.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>regional</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/regional/edit.blade.php'>edit.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/regional/index.blade.php'>index.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/regional/create.blade.php'>create.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>anggota</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/anggota/edit.blade.php'>edit.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/anggota/show.blade.php'>show.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/anggota/index.blade.php'>index.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/anggota/create.blade.php'>create.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>event</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/event/edit.blade.php'>edit.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/event/show.blade.php'>show.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/event/index.blade.php'>index.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/views/master/event/create.blade.php'>create.blade.php</a></b></td>
										<td><code>❯ REPLACE-ME</code></td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>lang</b></summary>
				<blockquote>
					<details>
						<summary><b>en</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/lang/en/auth.php'>auth.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/lang/en/pagination.php'>pagination.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/lang/en/validation.php'>validation.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/resources/lang/en/passwords.php'>passwords.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- routes Submodule -->
		<summary><b>routes</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/routes/api.php'>api.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/routes/channels.php'>channels.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/routes/web.php'>web.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/routes/console.php'>console.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- public Submodule -->
		<summary><b>public</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/public/.htaccess'>.htaccess</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/public/index.php'>index.php</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/public/robots.txt'>robots.txt</a></b></td>
				<td><code>❯ REPLACE-ME</code></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- app Submodule -->
		<summary><b>app</b></summary>
		<blockquote>
			<details>
				<summary><b>Exceptions</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Exceptions/Handler.php'>Handler.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>Models</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/District.php'>District.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/User.php'>User.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Redeem.php'>Redeem.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Motor.php'>Motor.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Regency.php'>Regency.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/AnggotaKomunitas.php'>AnggotaKomunitas.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Regional.php'>Regional.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Event.php'>Event.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Komunitas.php'>Komunitas.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Register.php'>Register.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Gift.php'>Gift.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Village.php'>Village.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Attendant.php'>Attendant.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Poin.php'>Poin.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Province.php'>Province.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Models/Biodata.php'>Biodata.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>Http</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Kernel.php'>Kernel.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
					<details>
						<summary><b>Controllers</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/BiodataController.php'>BiodataController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/PengpusAnggotaController.php'>PengpusAnggotaController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/RegisterController.php'>RegisterController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/RedeemController.php'>RedeemController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/PengpusEventController.php'>PengpusEventController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/Controller.php'>Controller.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/EventController.php'>EventController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/AnggotaKomunitasController.php'>AnggotaKomunitasController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/MotorController.php'>MotorController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/LoginController.php'>LoginController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/AttendantController.php'>AttendantController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/PengpusGiftController.php'>PengpusGiftController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/RegionalController.php'>RegionalController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/KomunitasController.php'>KomunitasController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/PoinController.php'>PoinController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/IndoRegionController.php'>IndoRegionController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Controllers/DashboardController.php'>DashboardController.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
					<details>
						<summary><b>Middleware</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/EncryptCookies.php'>EncryptCookies.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/TrustProxies.php'>TrustProxies.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/RedirectIfAuthenticated.php'>RedirectIfAuthenticated.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/VerifyCsrfToken.php'>VerifyCsrfToken.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/PreventRequestsDuringMaintenance.php'>PreventRequestsDuringMaintenance.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/Authenticate.php'>Authenticate.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/TrimStrings.php'>TrimStrings.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Middleware/TrustHosts.php'>TrustHosts.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
					<details>
						<summary><b>Requests</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/StoreEventRequest.php'>StoreEventRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/StoreAnggotaKomunitasRequest.php'>StoreAnggotaKomunitasRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/UpdateMotorRequest.php'>UpdateMotorRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/UpdateAnggotaKomunitasRequest.php'>UpdateAnggotaKomunitasRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/StoreMotorRequest.php'>StoreMotorRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/StoreBiodataRequest.php'>StoreBiodataRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/UpdateBiodataRequest.php'>UpdateBiodataRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Http/Requests/UpdateEventRequest.php'>UpdateEventRequest.php</a></b></td>
								<td><code>❯ REPLACE-ME</code></td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>Policies</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Policies/AnggotaKomunitasPolicy.php'>AnggotaKomunitasPolicy.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Policies/KomunitasPolicy.php'>KomunitasPolicy.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Policies/MotorPolicy.php'>MotorPolicy.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Policies/EventPolicy.php'>EventPolicy.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Policies/BiodataPolicy.php'>BiodataPolicy.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>Console</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Console/Kernel.php'>Kernel.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>Providers</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Providers/RouteServiceProvider.php'>RouteServiceProvider.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Providers/AuthServiceProvider.php'>AuthServiceProvider.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Providers/AppServiceProvider.php'>AppServiceProvider.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Providers/EventServiceProvider.php'>EventServiceProvider.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/app/Providers/BroadcastServiceProvider.php'>BroadcastServiceProvider.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- database Submodule -->
		<summary><b>database</b></summary>
		<blockquote>
			<details>
				<summary><b>seeders</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/IndoRegionVillageSeeder.php'>IndoRegionVillageSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/User.php'>User.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/DatabaseSeeder.php'>DatabaseSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/KomunitasSeeder.php'>KomunitasSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/IndoRegionSeeder.php'>IndoRegionSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/AnggotaKomunitasSeeder.php'>AnggotaKomunitasSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/IndoRegionDistrictSeeder.php'>IndoRegionDistrictSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/IndoRegionProvinceSeeder.php'>IndoRegionProvinceSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/EventSeeder.php'>EventSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/MotorSeeder.php'>MotorSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/IndoRegionRegencySeeder.php'>IndoRegionRegencySeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/seeders/BiodataSeeder.php'>BiodataSeeder.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>factories</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/factories/BiodataFactory.php'>BiodataFactory.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/factories/UserFactory.php'>UserFactory.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/factories/AnggotaKomunitasFactory.php'>AnggotaKomunitasFactory.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/factories/EventFactory.php'>EventFactory.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/factories/KomunitasFactory.php'>KomunitasFactory.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/factories/MotorFactory.php'>MotorFactory.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>migrations</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_05_14_094837_create_komunitas_table.php'>2022_05_14_094837_create_komunitas_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_07_14_152903_create_permission_tables.php'>2022_07_14_152903_create_permission_tables.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_06_03_032237_create_biodatas_table.php'>2022_06_03_032237_create_biodatas_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2017_05_02_140444_create_regencies_tables.php'>2017_05_02_140444_create_regencies_tables.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_07_01_033505_create_redeems_table.php'>2022_07_01_033505_create_redeems_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2017_05_02_143454_create_villages_tables.php'>2017_05_02_143454_create_villages_tables.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2017_05_02_142019_create_districts_tables.php'>2017_05_02_142019_create_districts_tables.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_06_30_033909_add_slug_to_gifts.php'>2022_06_30_033909_add_slug_to_gifts.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_05_09_202103_create_regionals_table.php'>2022_05_09_202103_create_regionals_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2014_10_12_100000_create_password_resets_table.php'>2014_10_12_100000_create_password_resets_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2014_10_12_000000_create_users_table.php'>2014_10_12_000000_create_users_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_06_28_032440_create_attendants_table.php'>2022_06_28_032440_create_attendants_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2017_05_02_140432_create_provinces_tables.php'>2017_05_02_140432_create_provinces_tables.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2019_08_19_000000_create_failed_jobs_table.php'>2019_08_19_000000_create_failed_jobs_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php'>2019_12_14_000001_create_personal_access_tokens_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_06_13_031819_create_motors_table.php'>2022_06_13_031819_create_motors_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_06_18_174053_create_anggota_komunitas_table.php'>2022_06_18_174053_create_anggota_komunitas_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_05_17_230244_add_soft_delete_to_komunitas_table.php'>2022_05_17_230244_add_soft_delete_to_komunitas_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_06_30_032313_create_gifts_table.php'>2022_06_30_032313_create_gifts_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_06_03_034834_add_picture_to_biodata.php'>2022_06_03_034834_add_picture_to_biodata.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/f3brysan/fsi-app/blob/master/database/migrations/2022_05_20_015936_create_events_table.php'>2022_05_20_015936_create_events_table.php</a></b></td>
						<td><code>❯ REPLACE-ME</code></td>
					</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
</details>

---
##  Getting Started

###  Prerequisites

Before getting started with fsi-app, ensure your runtime environment meets the following requirements:

- **Programming Language:** PHP
- **Package Manager:** Npm, Composer


###  Installation

Install fsi-app using one of the following methods:

**Build from source:**

1. Clone the fsi-app repository:
```sh
❯ git clone https://github.com/f3brysan/fsi-app
```

2. Navigate to the project directory:
```sh
❯ cd fsi-app
```

3. Install the project dependencies:


**Using `npm`** &nbsp; [<img align="center" src="" />]()

```sh
❯ echo 'INSERT-INSTALL-COMMAND-HERE'
```


**Using `composer`** &nbsp; [<img align="center" src="https://img.shields.io/badge/PHP-777BB4.svg?style={badge_style}&logo=php&logoColor=white" />](https://www.php.net/)

```sh
❯ composer install
```




###  Usage
Run fsi-app using the following command:
**Using `npm`** &nbsp; [<img align="center" src="" />]()

```sh
❯ echo 'INSERT-RUN-COMMAND-HERE'
```


**Using `composer`** &nbsp; [<img align="center" src="https://img.shields.io/badge/PHP-777BB4.svg?style={badge_style}&logo=php&logoColor=white" />](https://www.php.net/)

```sh
❯ php {entrypoint}
```


###  Testing
Run the test suite using the following command:
**Using `npm`** &nbsp; [<img align="center" src="" />]()

```sh
❯ echo 'INSERT-TEST-COMMAND-HERE'
```


**Using `composer`** &nbsp; [<img align="center" src="https://img.shields.io/badge/PHP-777BB4.svg?style={badge_style}&logo=php&logoColor=white" />](https://www.php.net/)

```sh
❯ vendor/bin/phpunit
```


---
##  Project Roadmap

- [X] **`Task 1`**: <strike>Implement feature one.</strike>
- [ ] **`Task 2`**: Implement feature two.
- [ ] **`Task 3`**: Implement feature three.

---

##  Contributing

- **💬 [Join the Discussions](https://github.com/f3brysan/fsi-app/discussions)**: Share your insights, provide feedback, or ask questions.
- **🐛 [Report Issues](https://github.com/f3brysan/fsi-app/issues)**: Submit bugs found or log feature requests for the `fsi-app` project.
- **💡 [Submit Pull Requests](https://github.com/f3brysan/fsi-app/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.

<details closed>
<summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your github account.
2. **Clone Locally**: Clone the forked repository to your local machine using a git client.
   ```sh
   git clone https://github.com/f3brysan/fsi-app
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to github**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.
8. **Review**: Once your PR is reviewed and approved, it will be merged into the main branch. Congratulations on your contribution!
</details>

<details closed>
<summary>Contributor Graph</summary>
<br>
<p align="left">
   <a href="https://github.com{/f3brysan/fsi-app/}graphs/contributors">
      <img src="https://contrib.rocks/image?repo=f3brysan/fsi-app">
   </a>
</p>
</details>

---

##  License

This project is protected under the [SELECT-A-LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

##  Acknowledgments

- List any resources, contributors, inspiration, etc. here.

---

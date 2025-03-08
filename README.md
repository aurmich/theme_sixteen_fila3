<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
~~~bash
git clone --recurse-submodules https://github.com/aurmich/base_fixcity_fila3.git 
cd base_fixcity_fila3
~~~


~~~bash
git remote -v
~~~
must return 
~~~bash
origin  https://github.com/aurmich/base_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/base_fixcity_fila3.git (push)
~~~

~~~bash
git submodule foreach git remote -v
~~~
must return 
~~~bash
Entering 'bashscripts'
origin  https://github.com/aurmich/bashscripts_fila3.git (fetch)
origin  https://github.com/aurmich/bashscripts_fila3.git (push)
Entering 'laravel/Modules/AI'
origin  https://github.com/aurmich/module_ai_fila3.git (fetch)
origin  https://github.com/aurmich/module_ai_fila3.git (push)
Entering 'laravel/Modules/Activity'
origin  https://github.com/aurmich/module_activity_fila3.git (fetch)
origin  https://github.com/aurmich/module_activity_fila3.git (push)
Entering 'laravel/Modules/Blog'
origin  https://github.com/aurmich/module_blog_fila3.git (fetch)
origin  https://github.com/aurmich/module_blog_fila3.git (push)
Entering 'laravel/Modules/Cms'
origin  https://github.com/aurmich/module_cms_fila3.git (fetch)
origin  https://github.com/aurmich/module_cms_fila3.git (push)
Entering 'laravel/Modules/Comment'
origin  https://github.com/aurmich/module_comment_fila3.git (fetch)
origin  https://github.com/aurmich/module_comment_fila3.git (push)
Entering 'laravel/Modules/Fixcity'
origin  https://github.com/aurmich/module_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/module_fixcity_fila3.git (push)
Entering 'laravel/Modules/Gdpr'
origin  https://github.com/aurmich/module_gdpr_fila3.git (fetch)
origin  https://github.com/aurmich/module_gdpr_fila3.git (push)
Entering 'laravel/Modules/Geo'
origin  https://github.com/aurmich/module_geo_fila3.git (fetch)
origin  https://github.com/aurmich/module_geo_fila3.git (push)
Entering 'laravel/Modules/Job'
origin  https://github.com/aurmich/module_job_fila3.git (fetch)
origin  https://github.com/aurmich/module_job_fila3.git (push)
Entering 'laravel/Modules/Lang'
origin  https://github.com/aurmich/module_lang_fila3.git (fetch)
origin  https://github.com/aurmich/module_lang_fila3.git (push)
Entering 'laravel/Modules/Media'
origin  https://github.com/aurmich/module_media_fila3.git (fetch)
origin  https://github.com/aurmich/module_media_fila3.git (push)
Entering 'laravel/Modules/Notify'
origin  https://github.com/aurmich/module_notify_fila3.git (fetch)
origin  https://github.com/aurmich/module_notify_fila3.git (push)
Entering 'laravel/Modules/Rating'
origin  https://github.com/aurmich/module_rating_fila3.git (fetch)
origin  https://github.com/aurmich/module_rating_fila3.git (push)
Entering 'laravel/Modules/Seo'
origin  https://github.com/aurmich/module_seo_fila3.git (fetch)
origin  https://github.com/aurmich/module_seo_fila3.git (push)
Entering 'laravel/Modules/Setting'
origin  https://github.com/aurmich/module_setting_fila3.git (fetch)
origin  https://github.com/aurmich/module_setting_fila3.git (push)
Entering 'laravel/Modules/Tenant'
origin  https://github.com/aurmich/module_tenant_fila3.git (fetch)
origin  https://github.com/aurmich/module_tenant_fila3.git (push)
Entering 'laravel/Modules/Ticket'
origin  https://github.com/aurmich/module_ticket_fila3.git (fetch)
origin  https://github.com/aurmich/module_ticket_fila3.git (push)
Entering 'laravel/Modules/UI'
origin  https://github.com/aurmich/module_ui_fila3.git (fetch)
origin  https://github.com/aurmich/module_ui_fila3.git (push)
Entering 'laravel/Modules/User'
origin  https://github.com/aurmich/module_user_fila3.git (fetch)
origin  https://github.com/aurmich/module_user_fila3.git (push)
Entering 'laravel/Modules/Xot'
origin  https://github.com/aurmich/module_xot_fila3.git (fetch)
origin  https://github.com/aurmich/module_xot_fila3.git (push)
Entering 'laravel/Themes/Sixteen'
origin  https://github.com/aurmich/theme_sixteen_fila3.git (fetch)
origin  https://github.com/aurmich/theme_sixteen_fila3.git (push)
Entering 'laravel/Themes/TwentyOne'
origin  https://github.com/aurmich/theme_twentyone_fila3.git (fetch)
origin  https://github.com/aurmich/theme_twentyone_fila3.git (push)
~~~


~~~
cd laravel
cp .env.latest .env
code ..
~~~

<<<<<<< HEAD
=======
# Module Xot Fila3 🔥 The Ultimate Laravel Multi-module Solution 🚀

[![Latest Release](https://img.shields.io/github/v/release/laraxot/module_xot_fila3)](https://github.com/laraxot/module_xot_fila3/releases)
[![Build Status](https://img.shields.io/travis/laraxot/module_xot_fila3/master)](https://travis-ci.org/laraxot/module_xot_fila3)
[![Code Coverage](https://img.shields.io/codecov/c/github/laraxot/module_xot_fila3)](https://codecov.io/gh/laraxot/module_xot_fila3)
[![License](https://img.shields.io/github/license/laraxot/module_xot_fila3)](LICENSE)

Power your Laravel application with **Module Xot Fila3**, a comprehensive multi-module management system designed to integrate seamlessly into your existing architecture. Build faster, smarter, and with better modular control. 🔥

### Key Features 🌟
- **Multi-module Support**: Easily manage multiple modules in one application.
- **Integrated Permissions**: Fine-grained control over user access to specific modules.
- **Automatic Module Discovery**: Add new modules without touching any config files.
- **Dynamic Routing**: Seamlessly manage routing for different modules with ease.
- **Filament 3 Compatible**: Fully compatible with Filament 3 admin panel interface.
=======
# Module User Fila3 🔥 Ultimate User, Roles & Permissions Manager for FilamentPHP 🚀

[![Latest Release](https://img.shields.io/github/v/release/laraxot/module_user_fila3)](https://github.com/laraxot/module_user_fila3/releases)
[![Build Status](https://img.shields.io/travis/laraxot/module_user_fila3/master)](https://travis-ci.org/laraxot/module_user_fila3)
[![Code Coverage](https://img.shields.io/codecov/c/github/laraxot/module_user_fila3)](https://codecov.io/gh/laraxot/module_user_fila3)
[![License](https://img.shields.io/github/license/laraxot/module_user_fila3)](LICENSE)

Manage users, roles, and permissions with lightning speed ⚡ through this Laravel module, fully integrated with FilamentPHP. Designed for developers who want **full control** over their user management systems. **Empower your app** with dynamic user access control and module assignments. 🚀

### Key Features 🌟
- **Create Super Admin in Seconds**: Instantly make any user a super admin with `php artisan user:super-admin`. 🛡️
- **Dynamic Module Assignment**: Control user access to specific modules through `php artisan user:assign-module`. 🎯
- **Complete Team Management**: Manage teams with simple commands like `php artisan team:create` and `php artisan team:assign-user`. 👥
- **Permissions that Fit**: Set flexible roles and permissions to fit your app’s unique needs! 🔑
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
# GDPR Module Fila3 🔒 Your All-in-One GDPR Compliance Solution for Laravel 🚀

[![Latest Release](https://img.shields.io/github/v/release/laraxot/module_gdpr_fila3)](https://github.com/laraxot/module_gdpr_fila3/releases)
[![Build Status](https://img.shields.io/travis/laraxot/module_gdpr_fila3/master)](https://travis-ci.org/laraxot/module_gdpr_fila3)
[![Code Coverage](https://img.shields.io/codecov/c/github/laraxot/module_gdpr_fila3)](https://codecov.io/gh/laraxot/module_gdpr_fila3)
[![License](https://img.shields.io/github/license/laraxot/module_gdpr_fila3)](LICENSE)
# Module Gdpr
[![Latest Version on Packagist](https://img.shields.io/packagist/v/laraxot/module_gdpr_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_gdpr_fila3)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/laraxot/module_gdpr_fila3/run-tests?label=tests)](https://github.com/laraxot/module_gdpr_fila3/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/laraxot/module_gdpr_fila3/Check%20&%20fix%20styling?label=code%20style)](https://github.com/laraxot/module_gdpr_fila3/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/laraxot/module_gdpr_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_gdpr_fila3)

The **GDPR Fila3** module is designed to help developers and businesses comply with GDPR regulations. It provides tools and features to manage users' personal data, ensuring that it is processed securely and transparently.

## Prerequisites
- php v8+
- laravel
- **[Xot Module](https://github.com/laraxot/module_xot_fila3.git)** (Required)
- **[Tenant Module](https://github.com/laraxot/module_tenant_fila3.git)** (Required)
- **[UI Module](https://github.com/laraxot/module_ui_fila3.git)** (Required)

## Add Module to the Project Base
Inside the `laravel/Modules` folder:

**Module GDPR Fila3** is the ultimate solution for integrating GDPR compliance into your Laravel project. With powerful features to manage user data, consent requests, and access requests, this module helps you ensure your project is fully compliant with GDPR regulations, saving you time and effort. 🛡️
=======
# Module Blog Fila3 📚 Create, Manage, and Engage with Powerful Blog Features! 🚀

[![Latest Release](https://img.shields.io/github/v/release/laraxot/module_blog_fila3)](https://github.com/laraxot/module_blog_fila3/releases)
[![Build Status](https://img.shields.io/travis/laraxot/module_blog_fila3/master)](https://travis-ci.org/laraxot/module_blog_fila3)
[![Total Downloads](https://img.shields.io/packagist/dt/laraxot/module_blog_fila3)](https://packagist.org/packages/laraxot/module_blog_fila3)
[![License](https://img.shields.io/github/license/laraxot/module_blog_fila3)](LICENSE)

**Module Blog Fila3** is the ultimate blogging module for Laravel, allowing you to easily create, manage, and publish engaging blog content with robust functionality and seamless integration! ✨
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)

---

### Key Features 🌟
<<<<<<< HEAD
- **User Data Management**: Collect, store, and process user data in compliance with GDPR.
- **Consent Requests**: Manage and record user consent for data processing seamlessly.
- **Data Access & Deletion**: Handle user data requests (access, modification, deletion) with ease.
- **Compliance Reporting**: Generate GDPR compliance reports to stay on top of regulations.
- **Automatic Logging**: Log all data access and processing activities for compliance.
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======

- **Create and Manage Articles**: Write, edit, and publish engaging content effortlessly.
- **Category Management**: Organize your articles into clear, structured categories.
- **Banner Support**: Showcase featured articles with rotating banners.
- **User Profiles**: Manage author profiles to attribute and showcase contributors.
- **Frontend Flexibility**: Easily integrate the blog into your frontend with customizable templates.
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)

---

### Installation Guide 💻

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
1. **Install via Composer:**
    ```bash
    composer require laraxot/module_xot_fila3
=======
1. **Install the package via Composer:**
    ```bash
    composer require laraxot/module_user_fila3
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
1. **Install the module:**
    ```bash
    git submodule add https://github.com/laraxot/module_gdpr_fila3.git Gdpr
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
1. **Install the module:**
    ```bash
    git submodule add https://github.com/laraxot/module_blog_fila3.git Blog
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
    ```

2. **Run Migrations:**
    ```bash
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    php artisan module:migrate Xot
    ```

3. **Publish Config:**
    ```bash
    php artisan vendor:publish --tag="module_xot_fila3-config"
=======
    php artisan module:migrate User
    ```

3. **Publish Config File:**
    ```bash
    php artisan vendor:publish --tag="module_user_fila3-config"
    ```

4. **Create First User:**
    ```bash
    php artisan make:filament-user
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
    php artisan module:migrate Gdpr
=======
    php artisan module:migrate Blog
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
    ```

3. **Enable the module:**
    ```bash
<<<<<<< HEAD
    php artisan module:enable Gdpr
=======
    php artisan module:enable Blog
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
    ```

4. **Check Active Modules:**
    ```bash
    php artisan module:list
<<<<<<< HEAD
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
    ```

---

<<<<<<< HEAD
<<<<<<< HEAD
### Supercharged Console Commands 🚀

<<<<<<< HEAD
Take full control with powerful artisan commands:

- **List Modules:**
    ```bash
    php artisan module:list
    ```
    _See all installed modules and manage them directly from the console._

- **Create New Module:**
    ```bash
    php artisan module:make <ModuleName>
    ```
    _Instantly create a new module with boilerplate code._

- **Migrate Specific Module:**
    ```bash
    php artisan module:migrate <ModuleName>
    ```
    _Run migrations for a specific module without touching the others._
=======
Leverage powerful artisan commands to boost your app’s user management capabilities:

- **Create Super Admin:**
    ```bash
    php artisan user:super-admin
    ```
    _Transform any user into an all-powerful super admin!_

- **Assign Modules:**
    ```bash
    php artisan user:assign-module
    ```
    _Dynamically assign or restrict modules for specific users._

- **Manage Teams:**
    - Create a team:
        ```bash
        php artisan team:create
        ```
    - Assign a user to a team:
        ```bash
        php artisan team:assign-user
        ```

- **View Available Modules:**
    ```bash
    php artisan module:list
    ```
    _See all available modules and activate/deactivate them at will._
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
### Console Commands 🚀

Manage GDPR features directly from the terminal:

- **List GDPR Requests:**
    ```bash
    php artisan gdpr:list
    ```
    _View all active GDPR requests from users._

- **Generate Compliance Report:**
    ```bash
    php artisan gdpr:report
    ```
    _Generate a report for your GDPR compliance efforts._

- **Log Data Processing Activities:**
    ```bash
    php artisan gdpr:log <activity>
    ```
    _Automatically log data processing activities to ensure transparency._
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)

---

### Configuration 🔧

<<<<<<< HEAD
<<<<<<< HEAD
Customize the behavior of your modules via the `module_xot_fila3.php` config file. Take control of routes, permissions, and much more!

---

### Filament 3 Compatibility ✅

Il modulo Xot è ora completamente compatibile con Filament 3. Abbiamo risolto i problemi noti come:

- **Errore `Method Filament\Actions\Action::table does not exist`**: Corretto nel trait `HasXotTable` con verifiche condizionali
- **Gestione delle tabelle**: Migliorata la compatibilità con l'API di Filament 3 per le azioni nelle tabelle

Per ulteriori dettagli, consulta il file `docs/xot_compatibility.md` nel modulo Broker o il `CHANGELOG.md` in questo modulo.

---

### Testing 🧪

Il modulo Xot include test completi per garantire la stabilità e l'affidabilità dei componenti critici:

#### Esecuzione dei Test

```bash
cd laravel/Modules/Xot
php artisan test --filter=Modules\\Xot\\Tests
```

#### Copertura dei Test

I test coprono componenti critici come:
- Trait `HasXotTable` per garantire compatibilità multi-versione con Filament
- Modelli base e relazioni
- Funzionalità di gestione dei moduli

#### Aggiunta di Nuovi Test

Per aggiungere nuovi test:
1. Creare il file di test in `Modules/Xot/tests/Unit` o `Modules/Xot/tests/Feature`
2. Seguire le convenzioni di denominazione: `NomeComponenteTest.php`
3. Assicurarsi di testare sia i casi di successo che i casi limite
=======
Customize the module to fit your app's GDPR needs. Update configurations via `module_gdpr_fila3.php` to adapt logging, consent handling, and more.
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
### Models and Their Purpose 🛠️

- **Article**: Represents blog posts with rich content, including text, images, and custom blocks.
- **Category**: Groups articles under specific themes, such as Sports, Politics, or Science.
- **Banner**: Displays highlighted content as a carousel on the homepage for more visibility.
- **Profile**: Manages user profiles, allowing for author details and bio presentation on posts.

---

### Supercharged Console Commands 🚀

- **List Articles:**
    ```bash
    php artisan blog:articles
    ```
    _View all published blog articles._

- **Create a New Article:**
    ```bash
    php artisan blog:create <title>
    ```
    _Easily draft a new blog post._

- **Manage Categories:**
    ```bash
    php artisan blog:categories
    ```
    _View and manage the article categories._
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)

---

### FAQ ❓

<<<<<<< HEAD
<<<<<<< HEAD
- **Q: Can I add modules dynamically?**
  A: Absolutely! Modules are automatically discovered and configured without the need for manual updates to your config files.

- **Q: How do I manage routes for each module?**
  A: Route management is integrated. Just focus on building your modules and let the system handle the rest!

- **Q: Is this compatible with Filament 3?**
  A: Yes! Version 10.0.x and above are fully compatible with Filament 3, with all known issues resolved.
=======
Easily configure the module in the `module_user_fila3.php` config file to suit your app's specific needs.

### FAQ ❓

- **Q: How do I assign roles?**
  A: Use the Filament interface or `php artisan user:assign-module` command to assign roles and modules.

- **Q: Can I manage teams?**
  A: Absolutely! Use `php artisan team:create` to create new teams and `php artisan team:assign-user` to add users.

### Contribute 💪

We 💖 open source! Want to improve this package? Fork the repo and submit a pull request.
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
- **Q: How do I manage consent requests?**
  A: Consent requests can be created and tracked within the module. You can set custom policies for consent renewal and updates.

- **Q: Is logging data access automatic?**
  A: Yes! All user data access and processing are automatically logged and can be reviewed at any time.
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
- **Q: How do I display the blog on my site?**
  A: The module integrates seamlessly with your frontend, providing customizable templates for listing articles, categories, and more.

- **Q: Can I schedule posts for future publication?**
  A: Yes! You can set publish dates for articles, allowing you to plan content ahead.
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)

---

### Author 👨‍💻

Developed and maintained by [Marco Sottana](https://github.com/marco76tv)  
📧 Email: marco.sottana@gmail.com

---

### License 📄

This package is open-sourced under the [MIT license](LICENSE).

---

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
**Boost your Laravel app with powerful modular capabilities using Module Xot Fila3!** 💥
>>>>>>> f755e5bcec (Squashed 'laravel/Modules/Xot/' content from commit 5d7fb5a1)
=======
# Module Setting
Modulo dedicato alla gestione di alcune configurazioni
=======
Give your Laravel app the **edge** it deserves with **Module User Fila3**. Try it now! 💥


# Module users
Gestione degli utenti, ruoli, permessi tramite l'utilizzo di filament.

## Gestione degli utenti

![create_user](docs/img/create_user.jpg)
![set_password](docs/img/set_password.jpg)

## Gestione dei ruoli
![roles list](docs/img/roles_list.JPG)

>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
# Module Cms
Modulo dedicato alla gestione dei temi applicabili al progetto
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)

## Aggiungere Modulo nella base del progetto
Dentro la cartella laravel/Modules

```bash
<<<<<<< HEAD
<<<<<<< HEAD
git submodule add https://github.com/laraxot/module_setting_fila3.git Setting
=======
git submodule add https://github.com/laraxot/module_user_fila3.git User
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
```

## Verificare che il modulo sia attivo
=======
Stay compliant and secure user trust with **Module GDPR Fila3**! 💥
## Verify the Module is Active
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
git submodule add https://github.com/laraxot/module_cms_fila3.git Cms
```

## Verificare che il modulo sia attivo
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
```bash
php artisan module:list
```
in caso abilitarlo
```bash
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
php artisan module:enable Setting
=======
php artisan module:enable User
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
php artisan module:enable Cms
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
```

## Eseguire le migrazioni
```bash
<<<<<<< HEAD
<<<<<<< HEAD
php artisan module:migrate Setting
```
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
# 🚀 Unleash the Power of Job Management with Job Module Fila3! 🌟

## Description
Looking for the ultimate job management solution for your Laravel project? Look no further! The **Job Module Fila3** is here to revolutionize the way you handle job postings and applications. Say goodbye to chaos and hello to streamlined efficiency. ✨

## 🚀 Installation
Getting started is a breeze. Follow these simple steps to install the Job Module Fila3:

1. Clone the module to your `laravel/Modules` directory:
   bash
   git submodule add https://github.com/laraxot/module_job_fila3.git Job
   
2. Ensure the module is active:
   ```bash
   php artisan module:list
   ```
   
3. Enable the module if it's not already active:
   ```bash
   php artisan module:enable Job
   ```
   
4. Run the migrations to set up the database:
   ```bash
   php artisan module:migrate
   ```
   

## 🎉 Main Features
Unlock the full potential of your job management with these amazing features:
- **Effortless Job Listings Management**: Create, edit, and delete job postings with ease.
- **Streamlined Application Handling**: Manage applications efficiently and keep track of every applicant.
- **Comprehensive Job Reporting**: Get detailed insights and reports on job applications and postings.

## 🏆 Badges
Stay on top of your game with our dynamic badges:
![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/laraxot/module_job_fila3/ci.yml?branch=main)
![GitHub Release](https://img.shields.io/github/v/release/laraxot/module_job_fila3)
![GitHub License](https://img.shields.io/github/license/laraxot/module_job_fila3)

## 📜 License
This project is licensed under the MIT License. For more details, check out the `LICENSE.md` file.

## 🌟 Authors
A special shoutout to the masterminds behind this project:
- [Marco Sottana](https://github.com/marco76tv)


## 🤝 Contributing
Join the revolution! If you want to contribute to the project, send us a pull request or open an issue to share your ideas.
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
php artisan module:migrate User
```

## Creare il primo account
Dalla documentazione di filament utilizziamo:
```bash
php artisan make:filament-user
```
l'account non potrà visualizzare nulla nella dashboard di amministrazione, in quanto non avrà assegnato nessun ruolo.

## Rendere un account Super Admin
```bash
php artisan user:super-admin
```
Ora avete il vostro account Super Admin per poter iniziare.
Esso potrà accedere a tutti i moduli nell'amminstrazione.

## Assegnare un ruolo/modulo
```bash
php artisan user:assign-module
```
L'account potrà accedere al modulo assegnato.

## [Gestione dei Team](docs/teams.md)
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
# 🎉 Unlock the Power of Media with Fila3 Module! 🚀

![GitHub issues](https://img.shields.io/github/issues/laraxot/module_media_fila3)
![GitHub forks](https://img.shields.io/github/forks/laraxot/module_media_fila3)
![GitHub stars](https://img.shields.io/github/stars/laraxot/module_media_fila3)
![License](https://img.shields.io/badge/license-MIT-green)

Welcome to the **Fila3 Media Module**! This innovative module is designed to revolutionize how you manage and display media content in your applications. Whether you’re building a new project or enhancing an existing one, the Fila3 module brings flexibility and ease to your media handling needs.

## 📦 What’s Inside?

The Fila3 module integrates seamlessly with your application, providing:

- **Dynamic Media Management**: Effortlessly upload, categorize, and display various media types.
- **User-Friendly Interface**: A sleek and intuitive UI for managing media files.
- **Powerful API Support**: Interact with media content programmatically with our robust API.

## 🌟 Key Features

- **Multi-format Support**: Handle images, videos, and audio files with ease.
- **Advanced Media Upload**: Supports drag-and-drop functionality for effortless uploads.
- **Search & Filter**: Quickly find media files using advanced search and filtering options.
- **Responsive Design**: Looks great on any device, ensuring a smooth user experience.
- **Media Previews**: Get instant previews of media files before finalizing your uploads.
- **Batch Processing**: Upload and manage multiple media files at once.
- **Role-based Access Control**: Secure your media management with customizable user permissions.

## 🚀 Why Choose Fila3?

- **Fast & Efficient**: Say goodbye to sluggish media handling! Experience lightning-fast performance.
- **Scalable**: Perfect for small projects and large enterprises alike.
- **Active Community**: Join a vibrant community of developers and contributors who are ready to help.

## 🔧 Installation

Getting started is a breeze! Follow these simple steps to install the Fila3 module:

1. Clone the repository:
   ```bash
   git clone https://github.com/laraxot/module_media_fila3.git
=======
# 📣 Enhance Your App with the Fila3 Notify Module! 🚀

![GitHub issues](https://img.shields.io/github/issues/laraxot/module_notify_fila3)
![GitHub forks](https://img.shields.io/github/forks/laraxot/module_notify_fila3)
![GitHub stars](https://img.shields.io/github/stars/laraxot/module_notify_fila3)
![License](https://img.shields.io/badge/license-MIT-green)

Welcome to the **Fila3 Notify Module**! This powerful notification system is designed to streamline communication within your application. Whether you’re sending alerts, reminders, or updates, the Fila3 Notify Module has you covered with its versatile features and easy integration.

## 📦 What’s Inside?

The Fila3 Notify Module allows you to implement a robust notification system with minimal effort, featuring:

- **Real-time Notifications**: Send and receive notifications instantly to enhance user engagement.
- **Customizable Notification Types**: Tailor notifications to your needs, from alerts to success messages.
- **User-Specific Notifications**: Deliver targeted notifications to specific users based on their actions or preferences.
- **Persistent Notification Management**: Easily manage and store notifications for later access.

## 🌟 Key Features

- **Multi-format Support**: Create notifications with rich content, including text, images, and links.
- **Notification Queue**: Handle multiple notifications efficiently with a built-in queue system.
- **Event Listeners**: Integrate easily with your application’s events to trigger notifications automatically.
- **Custom Notification Channels**: Organize notifications into different channels to keep users informed about relevant updates.
- **Configurable Display Options**: Choose how and where notifications appear, from pop-ups to in-page alerts.
- **User Preferences Management**: Allow users to customize their notification settings for a personalized experience.
- **Integration with External APIs**: Seamlessly connect with third-party services to fetch or send notifications.

## 🚀 Why Choose Fila3 Notify?

- **Efficient & Lightweight**: Designed for high performance without slowing down your application.
- **Scalable Architecture**: Perfect for small applications and large-scale systems alike.
- **Active Community Support**: Join an engaged community of developers ready to assist and share insights.

## 🔧 Installation

Getting started with the Fila3 Notify Module is easy! Follow these steps to integrate it into your application:

1. Clone the repository:
   ```bash
   git clone https://github.com/laraxot/module_notify_fila3.git
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
# 🌐 Simplify Multi-Tenancy with the Fila3 Tenant Module! 🚀

![GitHub issues](https://img.shields.io/github/issues/laraxot/module_tenant_fila3)
![GitHub forks](https://img.shields.io/github/forks/laraxot/module_tenant_fila3)
![GitHub stars](https://img.shields.io/github/stars/laraxot/module_tenant_fila3)
![License](https://img.shields.io/badge/license-MIT-green)

Welcome to the **Fila3 Tenant Module**! This powerful multi-tenancy solution is designed to help developers build scalable applications that can serve multiple clients with ease. Streamline your architecture and enhance user experience by managing tenants effortlessly!

## 📦 What’s Inside?

The Fila3 Tenant Module provides a comprehensive suite of features for handling multi-tenancy, including:

- **Tenant Management**: Create, update, and delete tenant profiles with ease.
- **Isolation**: Ensure data and configurations are securely isolated between tenants.
- **Flexible Architecture**: Choose between a shared database or separate databases for each tenant.
- **Dynamic Configuration**: Customize settings for each tenant to suit their unique requirements.

## 🌟 Key Features

- **User Authentication**: Built-in support for tenant-based user authentication.
- **Role-Based Access Control**: Assign roles and permissions per tenant to maintain security.
- **Tenant-Specific Routes**: Easily manage routing and access control tailored for each tenant.
- **Automatic Tenant Switching**: Implement seamless tenant switching based on user context.
- **Centralized Dashboard**: Monitor all tenants from a single dashboard for administrative ease.
- **Extensible API**: Integrate with external services and extend functionality effortlessly.

## 🚀 Why Choose Fila3 Tenant?

- **Scalable & Efficient**: Designed for high performance, making it suitable for both small applications and large enterprises.
- **Developer-Friendly**: Easy to set up and integrate into existing projects.
- **Community Support**: Engage with an active community of developers ready to help you succeed.

## 🔧 Installation

Getting started with the Fila3 Tenant Module is straightforward! Follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/laraxot/module_tenant_fila3.git

>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)

Navigate to the project directory:
bash
Copia codice
<<<<<<< HEAD
<<<<<<< HEAD
cd module_media_fila3
=======
cd module_notify_fila3
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
cd module_tenant_fila3
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
Install dependencies:
bash
Copia codice
npm install
<<<<<<< HEAD
<<<<<<< HEAD
Configure your settings in the config file.
Start your application and watch the magic happen!
🤝 Contributing
We welcome contributions! Whether it’s fixing bugs, improving documentation, or adding new features, your help is invaluable. Check out the contributing guidelines to get started!
=======
Configure your settings in the config file to customize notification behavior.
Start your application and unleash the power of notifications!
📜 Usage Examples
Here are a few snippets to demonstrate how to use the Fila3 Notify Module in your application:

Sending a Notification
javascript
Copia codice
notify.send({
  title: "New Message!",
  message: "You have received a new message from John Doe.",
  type: "info", // options: success, error, warning, info
});
Listening for Notifications
javascript
Copia codice
notify.on('notificationReceived', (data) => {
  console.log("Notification:", data);
});
🤝 Contributing
We love contributions! If you have ideas, bug fixes, or enhancements, check out the contributing guidelines to get started.
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
Configure tenant settings in the config file.
Launch your application and experience effortless multi-tenancy!
📜 Usage Examples
Here are a few snippets to demonstrate how to use the Fila3 Tenant Module in your application:

Creating a New Tenant
javascript
Copia codice
tenantManager.create({
  name: "Tenant A",
  database: "tenant_a_db",
  settings: { /* tenant-specific settings */ }
});
Switching Tenants
javascript
Copia codice
tenantManager.switchTo("Tenant A");
Retrieving Tenant Information
javascript
Copia codice
const tenantInfo = tenantManager.getCurrentTenant();
console.log("Current Tenant:", tenantInfo);
🤝 Contributing
We welcome contributions! If you have ideas, bug fixes, or enhancements, check out the contributing guidelines to get started.
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)

📄 License
This project is licensed under the MIT License - see the LICENSE file for details.

👤 Author
Marco Sottana
<<<<<<< HEAD
<<<<<<< HEAD
Check out more of my work at marco76tv!
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
Discover more of my work at marco76tv!
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
Discover more of my work at marco76tv!
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
=======
php artisan module:enable Gdpr
```

## Run the Migrations
```bash
php artisan module:migrate Gdpr
```
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
Take your content creation to the next level with **Module Blog Fila3**! 💥
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
php artisan module:migrate Cms
```
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)

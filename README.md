# PeerBuilt

PeerBuilt is a student project collaboration prototype. It is designed to help students discover projects, meet teammates across schools, and build work they can show in a portfolio.

The repository currently contains the foundation of a PHP web app: page layouts, a small custom router, and a MySQL access layer. The project cards are example content while the listing and collaboration workflows are still in development.

## What you can explore

| Page | Current behavior |
| --- | --- |
| `/` | Landing page with a search interface and featured project examples. The controller also queries MySQL for up to six listings. |
| `/listings` | Recent projects page with example cards. |
| `/listings/create` | Project submission form UI with fields for the project, team needs, and organizer. |
| Other paths | Custom 404 page. |

The project uses **PHP**, **MySQL via PDO**, **Bootstrap 5**, **Font Awesome**, and custom CSS. Routes in `routes.php` map requests to controllers, which load views and shared page partials.

## Run locally

You need PHP (including the CLI, PDO, and `pdo_mysql` extension), a running MySQL server, and database credentials. There is no Composer or npm install step. Bootstrap and Font Awesome load from CDNs, so an internet connection is needed for those styles, icons, and scripts.

1. Clone the repository and enter it:

   ```bash
   git clone https://github.com/tylerrubino/PeerBuilt.git
   cd PeerBuilt
   ```

2. In your MySQL client, create a database and a `listings` table. There is no migration or seed file yet. This temporary, minimal table satisfies the current home page's read-only query; it is not a complete schema for project submissions:

   ```sql
   CREATE DATABASE peerbuilt;
   USE peerbuilt;
   CREATE TABLE listings (
       id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
   );
   ```

3. Create the configuration directory:

   ```bash
   mkdir -p config
   ```

   Then create `config/db.php` with your local database credentials. This file is gitignored.

   ```php
   <?php

   return [
       'host' => '127.0.0.1',
       'port' => 3306,
       'dbname' => 'peerbuilt',
       'username' => 'your_mysql_user',
       'password' => 'your_mysql_password',
   ];
   ```

4. From the repository root, start PHP's local server:

   ```bash
   php -S localhost:8000 -t public
   ```

   Open [http://localhost:8000](http://localhost:8000). For Apache, use `public/` as the document root and enable rewrite rules for `public/.htaccess`.

   The home page requires the database configuration and table above. You can preview `/listings` and `/listings/create` without a database connection because those controllers only render views.

## Project structure

```text
PeerBuilt/
├── config/db.php           # Local database credentials (create locally; gitignored)
├── controllers/            # Request handlers for pages and errors
├── public/                 # Web server document root
│   ├── index.php           # Application entry point
│   ├── .htaccess           # Apache rewrite rules
│   ├── css/                # Custom styles
│   └── images/             # Static images
├── views/                  # Page templates
│   └── partials/           # Shared head, navigation, banners, and footer
├── Database.php            # PDO connection and query wrapper
├── helpers.php             # Paths, template loading, and debugging helpers
├── router.php              # HTTP method and URI matching
└── routes.php              # Registered application routes
```

Requests enter through `public/index.php`, which loads the helpers, router, database class, and route definitions. The matching controller loads a view through `loadView()`, and views include shared layout pieces through `loadPartial()`.

To add a page, register its route in `routes.php`, add a controller under `controllers/`, and create its template under `views/`. The router provides `get()`, `post()`, `put()`, and `delete()` registration methods; the current application registers only GET routes. Matching uses the full request URI, so query strings and trailing slashes currently prevent an otherwise matching route from being found.

## Project status

This is an early prototype:

- Featured and recent project cards are hardcoded in the views. The home page fetches up to six database listings, but does not render those results yet.
- Search and project detail links are placeholders.
- Signup and login links have no registered routes.
- The project form posts to `/listings/create`, but there is no POST handler or persistence yet; submitting it returns the custom 404 page.
- The repository has no automated test suite, database migrations, or seed data.

The next steps are to define the project schema, render listings from the database, and implement project submission, discovery, and account flows.

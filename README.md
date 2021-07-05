# Srifoton 2021

A repository that contain Srifoton 2021 Web project and documentation. For UI code, we separate on different
repositories.

See the following repositories [Srifoton UI](https://github.com/Srifoton-IT-Team/srifoton-ui-2021) here.

### Index

* [How To Run Development](#how-to-run-how-to-run-development)
* [SiteMap](#sitemap)

## How to Run Development

1. PHP version 7.3 or newer is required.

```
$ php -v
```

2. Install latest version of MySQL.
3. Clone this repo.

```
$ git clone https://github.com/Srifoton-IT-Team/srifoton-2021.git
```
4. Uncomment intl extension in php.ini

```ini
;extension=intl
;to
extension=intl
```
5. Install latest version of Composer.
6. Install dependencies.

```
$ composer update
```

7. Run local development server.

```
$ php spark serve
```

Open http://localhost:8080 to view it in the browser.

## SiteMap

- / , for Landing page.
- /login, for Login Account.
- /register, for Register Account.
- /dashboard, for Dashboard Account.
- /competitive-programming, for CP competition.
- /ui-ux-design, for UI/UX competition.
- /photography, for Photography competition.

# Documentation

## Environment
If you want to change base setting for project like database password, go to .env file.

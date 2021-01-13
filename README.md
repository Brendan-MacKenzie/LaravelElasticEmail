# Laravel Elastic Email #

A Laravel wrapper for Elastic Email

Can send emails with multiple attachments

## IMPORTANT
### Laravel version
**5.5** or older - Use Version 1.1.1

**5.6** and forwards - Use version 1.2

### Installation ###

* Step 1

Add forked repository in composer.json 

```bash
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Brendan-MacKenzie/LaravelElasticEmail"
    }
]
```
* Step 2

Install package via composer 

```bash
composer require rdanusha/laravel-elastic-email
```
* Step 3

Add this code to **.env file**
```
ELASTIC_KEY=<Add your key>
```
* Step 4

Update **MAIL_DRIVER** value as 'elastic_email' in your **.env file**
```
MAIL_MAILER=elastic_email
```

* Step 5

Add this code to your **config/services.php** file
```
'elastic_email' => [
	'key' => env('ELASTIC_KEY'),
]
```
* Step 6

Open **config/app.php** file and go to providers array and add the following
```php
'providers' => [
    /*
     * Laravel Framework Service Providers...
     */
    ...
    Rdanusha\LaravelElasticEmail\LaravelElasticEmailServiceProvider::class,
    ...
],
```

### Usage ###

This package works exactly like Laravel's native mailers. Refer to Laravel's Mail documentation.

https://laravel.com/docs/5.5/mail

### Code Example ###
```php
Mail::to($request->user())->send(new OrderShipped($order));
```


# This is a simple Laravel package for adding functional responsive contact form to your website. 

Whenever user fills up the detail and clicks send message, you receive an email at the email address specified by you. It is built using Livewire and Tailwind CSS

# Pre Requisites:
```
Livewire 2.x
```

# Installation

To install use the following command
```
composer require adityar15/contactform
```

# Publising view and config files
Once install publish the config and view files.

```
php artisan vendor:publish --provider="adityar15\contactform\ContactFormServiceProvider"
```

# Blade file changes
In your blade file include tailwind cdn

```
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
```

Now in the same blade file wherever you would like to have the contact form just include these two lines

```
  @livewire('adityar15contactform')
  @livewireScripts
  
```
# Usage

If you do not wish to use tailwind and have your own custom styling, you can do it by editing the blade file.

You can edit the stylings of the form by editing the view file in the resources/views/vendor/contactform/contactform.blade.php
You can edit the email template from the view file in the resources/views/vendor/contactform/emailtemplate.blade.php

Alternatively you can change the email template blade from the config file. The config file is named as contactform.php.

```
<?php


return [
    'mail'=>[
        'mail_to' => env('MAIL_FROM_ADDRESS'),
        'mail_to_name'=> 'admin'
    ],

    'emailtemplate'=>'vendor.contactform.emailtemplate', 
	/**email template. Insert the blade file name which you want to be rendered for email. In this case emailtemplate is file located in side resources/views/vendor/contactform **/

    'subject_line' =>'Someone contacted you on your website',
	// subject line for your email
	
    'thankyou_message' => 'Thank you for contacting us. We will get back to you shortly.'
	//thank you message displayed to the user after successfull form submission
];

```

If you are using a custom email template then make a note to add following variables in the email blade file:

$name for yourname,
$body for the message,
$fromname for user's name who contacted you,
$fromemail for user's email who contacted you


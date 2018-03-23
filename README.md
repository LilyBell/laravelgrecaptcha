# Google reCaptcha in Laravel 5.5

For quite some time now Google reCaptcha has been the most advanced and easy to use reCaptcha option available. In addition to keeping
websites and forms safe from malicious software it is also being used to digitize text, annotate images and build machine learning data sets.

This tutorial will require Laravel 5.5 and a Google reCaptcha site key. Please make sure you meet all the dependence [requirements](https://laravel.com/docs/5.5/installation) to create a
Laravel 5.5 project.

To begin open your terminal and navigate to the directory where you want to create your project. In my case since I am using the JetBrains IDE
PhpStorm I am going to navigate to my project directory and create a new project with laravel. 

```Bash
cd ~/PhpStormProjects && laravel new LaravelGreCaptcha && cd LaravelGreCaptcha/
```

Now that we are in our new project directory it's time to get down to business. 

The first thing we want to do is get a site key for the Google reCaptcha API.

[Start Here](https://www.google.com/recaptcha/intro/)

1. Click on the "Get reCaptcha" button at the top
2. Fill in the form and check reCAPTCHA V2
3. The form will expand and ask you to register the domains that are associated with this app.
> **It is very important that you list all domains that your application might access the API from**
> **Failure to do this will result in the API refusing requests from your application.**

> When developing locally enter 127.0.0.1 for your domain

Next,  we want to do is create a base view template. These are useful for setting up content blocks as well as maintaining
application wide dependencies.

```Blade
<!-- resources/views/app.blade.php -->
<html>
<head>
    <title>Google reCaptcha - Laravel 5.5 @yield('title')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
```

Now that we have our base template we can create the view that we are going to display our form and the Google reCaptcha in. 

```Blade
<!--- /resources/views/index.blade.php --->

<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 col-sm-8 marb20">
                    <div class="contact-info">
                        <h3>I'm a Google reCaptcha!</h3>
                        
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
```

Now that you have the view where your reCaptcha challenge is going to live go back to the reCaptcha page in your browser
and locate the section that says *Client Side Integration* 

You will find two lines of code there.

```html
<script src='https://www.google.com/recaptcha/api.js'></script>
```

```html
<div class="g-recaptcha" data-sitekey="YOUR SITE KEY HERE"></div>
```

Where you put the first line of code depends entirely on whether or not you are going to use multiple instances of the
reCaptcha challenge or a single validation e.g. A user registration form

> **Single Use**
```Blade
<!-- /resources/views/index.blade.php -->

<script src='https://www.google.com/recaptcha/api.js'></script> 
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 col-sm-8 marb20">
                    <div class="contact-info">
                        <h3>I'm a Google reCaptcha!</h3>
                        
                        <div class="g-recaptcha" data-sitekey="YOUR SITE KEY HERE"></div>
                        
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
```

> **Global Use**
```Blade
<!-- resources/views/app.blade.php -->
<html>
<head>
    <title>Google reCaptcha - Laravel 5.5 @yield('title')</title>
    <script src='https://www.google.com/recaptcha/api.js'>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
```

```
ATTENTION
You should only use one of the above options. Using both runs the risk of the reCaptcha challenge not functioning
```
Success! The reCaptcha is now ready to use!

![Imgur](https://i.imgur.com/TNiseSd.png)

In the next tutorial we will cover how to use the reCaptcha challenge to validate a user registration form.









Example usage of [Google ReCaptcha](https://www.google.com/recaptcha) in a form using [Laravel 5.5](https://laravel.com/docs/5.5/installation).

Example code can be found in [resources/views/index.blade.php](https://github.com/LilyBell/laravelgrecaptcha/blob/master/resources/views/test.blade.php).

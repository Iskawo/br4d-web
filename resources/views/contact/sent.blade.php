<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About - Iskawo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="icon" href="{{ asset('img/nav-icon.png') }}">
        @include ('layouts.openGraph')
    </head>
    <body>
        <div class="notification is-success">
            <button class="delete"></button>
            Awesome! Your email has been sent.
        </div>
        @include ('layouts.theme')
        <section class="hero is-dark-nq-black has-text-centered" id="landing_toggle">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-2">Contact me</h1><br /><br />
                    <div class="container">
                        <div class="content">
                            <form action="/contact" method="POST" class="box">
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <label class="label">Username</label>
                                            <div class="control">
                                                <input id="username" class="input" name="username" value="{{ old('username') }}" placeholder="Your name" required>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="email" class="label">Email</label>
                                            <div class="control has-icons-left">
                                                <input id="email" name="email" type="email" class="input" value="{{ old('email') }}" placeholder="name@example.com" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <div>{{ $errors->first('email') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Subject</label>
                                    <div class="control">
                                        <input id="subject" class="input" name="subject" value="{{ old('subject') }}" placeholder="Email subject" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Message</label>
                                    <div class="control">
                                        <textarea id="message" name="message" class="textarea" placeholder="Message content" required></textarea>
                                        <div>{{ $errors->first('message') }}</div>
                                    </div>
                                </div>

                                @csrf

                                <button type="submit" class="button is-success">
                                    <span class="icon is-small">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span>Submit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.return')
        @include('layouts.cookies')
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;

                $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
                window.location = '/contact';
                });
            });
        });
        </script>
    </body>
</html>

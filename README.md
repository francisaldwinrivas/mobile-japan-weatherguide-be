# Japan Weatherguide

## Features
- 5 day forecast for Japanese Cities
- Map

## Tech Stack
- Laravel 12

## Installation
1. Clone the repository
2. Install dependencies via composer
3. Run the seeder

### Important
Run `php artisan passport:client --password` and save client id and client secret.
This credentials are used in setting the React Frontend

## About my code implementation

I used **Laravel Service Pattern**.

The Laravel Service Pattern is a design approach that helps you keep your controllers, models, and other components clean and focused by putting business logic into dedicated Service classes.

- Keeps Controllers thin and focused
- Promotes code reusability
- Improves testability
- Organized because business logic is separated

This approach, from my experience, is best for a faster and cleaner development as you can create new modules/features by just importing Service classes and reusing its methods.

I also used Passport for API authencation although I only used Password grant.

Passport is a very powerful package for API authentication as it offers **Full OAuth2** Implementation.

It is also great for SPAs and mobile Apps as it offer support for Personal Access Tokens.

It can also be used to create complex authentication like OTP, client crendential, and more. 

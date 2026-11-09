# Laravel POS TFA7

This source bundle extends the TFA6 Laravel POS application with validated customer and user forms, edit and update workflows, and display-ready user avatars.

## Requirements

- PHP 8.3 or newer
- Laravel 13
- Composer
- MySQL or MariaDB
- GD enabled in PHP

## Installation

1. Start with the Laravel POS project from TFA6, or create a fresh Laravel 13 application.
2. Copy the folders in this bundle into the project root, merging them with the existing folders.
3. Install the image package:

   ```bash
   composer require intervention/image-laravel
   ```

4. Configure the database in `.env`.
5. Run the migrations and seed sample records:

   ```bash
   php artisan migrate --seed
   php artisan storage:link
   php artisan serve
   ```

6. Open `http://127.0.0.1:8000/customers` and `http://127.0.0.1:8000/users`.

## Implemented requirements

- `/customers/create` validates `full_name`, `email`, and email format before inserting.
- `/users/create` validates required and unique usernames and required full names.
- Customer and user edit pages pre-fill existing values and update records.
- User edit accepts JPG, JPEG, PNG, or WEBP images up to 2 MB.
- Uploaded avatars are center-cropped to 300 by 300 pixels and stored on the public disk.
- Only the generated relative avatar path is saved in `users.avatar`.
- User listings display the prepared avatar and use a placeholder when no avatar exists.
- Blade forms use `old()` values and display `$errors` after failed validation.

## Submission checklist

- Push the complete Laravel project, including migrations and seeders, to GitHub.
- Confirm the repository README includes the real repository URL and setup steps.
- Deploy the project to a PHP host and test both listing and form workflows.
- Submit the live hosted URL together with the GitHub repository URL.


# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Hasil setelah melakukan JWT-Token
1. Request Token
   <img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/3a3dc8e7-7d0b-455d-b64d-8cc95fd1462a" />

2. Verify
   <img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/f9e7186c-e594-4d76-a0c8-6a102473f3f0" />

3. Insert Data
   <img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/1e97bb7a-48de-4ab9-ae51-a0aec1af83cf" />

4. Tampilan Semua Data
   <img width="1919" height="1000" alt="image" src="https://github.com/user-attachments/assets/adbfe66b-e0ef-411c-88d8-4840063eacac" />

5. Update Data
   <img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/5cb2339b-197d-4640-95e8-8d1a7efe7b9a" />

6. Tampilan Setelah Update Data
   <img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/84439383-5f65-45f1-b4a7-991f8545941a" />

7. Delete Data
   <img width="1919" height="1007" alt="image" src="https://github.com/user-attachments/assets/095c0f44-57ac-4a84-895c-c29d2cab822c" />

8. Tampilan Setelah Delete Data
   <img width="1919" height="1001" alt="image" src="https://github.com/user-attachments/assets/e85df032-c87a-4e33-8802-9acdcc84e191" />
   










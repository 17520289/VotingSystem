<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Jokee Single Serving Website

This is a PHP evaluation test to create a single serving website that displays jokes for user to vote

## Requirements
This app will display a single joke for the user to read. After reading the joke, the user will like or dislike the joke. The app will record the vote in database and then show another joke for the user to read. When there is no more jokes to show, the app will display a "That's all the jokes for today! Come back another day!" message.

There is no need to display the result of the votes. User should not see the same joke twice. User do not need to register or login to view the joke or vote for the joke.

## Technical Note
App will use cookie to track if a user has voted for a joke. It is okay if the user clears his cookie and votes again.

## Database using mysql
file: Voting.sql

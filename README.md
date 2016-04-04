# SpotOption platform API client

This repository contains PHP Client for SpotOption platform.

SpotOption is a trading platform for binary options.

## Installation
Install using [Composer](http://getcomposer.org), doubtless.

```sh
$ composer require alexander-emelyanov/spotoption-api-client
```

## Usage

First, you need to create a client object to connect to the TradoLogic servers. You will need to acquire an API username and API password for your app first from broker, then pass the credentials to the client object for logging in. 

```php
$client = new \SpotOption\ApiClient('<SPOTOPTION_API_URL>', '<API_USERNAME>', '<API_PASSWORD>');
```
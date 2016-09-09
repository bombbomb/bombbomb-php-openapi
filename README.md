# .
We make it easy to build relationships using simple videos.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.20679
- Package version: 2.0.20679
- Build date: 2016-09-09T01:37:18.244Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bombbomb/bombbomb.git"
    }
  ],
  "require": {
    "bombbomb/bombbomb": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$prompt = new \Swagger\Client\Model\VideoEmailPrompt(); // \Swagger\Client\Model\VideoEmailPrompt | The Video Email Prompt to be created

try {
    $result = $api_instance->createVideoEmailPrompt($prompt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->createVideoEmailPrompt: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.bombbomb.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PromptsApi* | [**createVideoEmailPrompt**](docs/Api/PromptsApi.md#createvideoemailprompt) | **POST** /prompt | Prompts user to send a video
*PromptsApi* | [**getVideoEmailPrompt**](docs/Api/PromptsApi.md#getvideoemailprompt) | **GET** /prompt/{id} | Gets a prompt
*PromptsApi* | [**respondToVideoEmailPrompt**](docs/Api/PromptsApi.md#respondtovideoemailprompt) | **POST** /prompt/{id}/response | Respond to a prompt
*TeamsApi* | [**cancelJerichoSend**](docs/Api/TeamsApi.md#canceljerichosend) | **DELETE** /team/{teamId}/jericho/{jerichoId} | Cancel a Jericho Send
*TeamsApi* | [**getClientGroupAssets**](docs/Api/TeamsApi.md#getclientgroupassets) | **GET** /team/assets/ | Lists team assets
*TeamsApi* | [**getJerichoSends**](docs/Api/TeamsApi.md#getjerichosends) | **GET** /team/{teamId}/jericho | List Jericho Sends
*TeamsApi* | [**getJerichoStats**](docs/Api/TeamsApi.md#getjerichostats) | **GET** /team/{teamId}/jericho/{jerichoId}/performance | Gets Jericho performance statistics
*TeamsApi* | [**queueJerichoSend**](docs/Api/TeamsApi.md#queuejerichosend) | **POST** /team/{teamId}/jericho | Creates a Jericho send.
*UtilitiesApi* | [**createOAuthClient**](docs/Api/UtilitiesApi.md#createoauthclient) | **POST** /oauthclient | Create an OAuth Client
*UtilitiesApi* | [**deleteOAuthClient**](docs/Api/UtilitiesApi.md#deleteoauthclient) | **DELETE** /oauthclient/{id} | Delete an OAuth Client
*UtilitiesApi* | [**getOAuthClients**](docs/Api/UtilitiesApi.md#getoauthclients) | **GET** /oauthclient | Lists OAuth Clients
*UtilitiesApi* | [**getSpec**](docs/Api/UtilitiesApi.md#getspec) | **GET** /spec | Describes this api
*WebhooksApi* | [**addWebHook**](docs/Api/WebhooksApi.md#addwebhook) | **POST** /webhook | Add Webhook
*WebhooksApi* | [**deleteWebHook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhook/{hookId} | Deletes Webhook
*WebhooksApi* | [**getWebHooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhook/ | Lists Webhooks
*WebhooksApi* | [**sendWebhookExample**](docs/Api/WebhooksApi.md#sendwebhookexample) | **POST** /webhook/test | Sends test Webhook


## Documentation For Models

 - [BBWebHook](docs/Model/BBWebHook.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse200Items](docs/Model/InlineResponse200Items.md)
 - [JerichoConfiguration](docs/Model/JerichoConfiguration.md)
 - [JerichoPerformance](docs/Model/JerichoPerformance.md)
 - [OAuthClient](docs/Model/OAuthClient.md)
 - [String](docs/Model/String.md)
 - [VideoEmailPrompt](docs/Model/VideoEmailPrompt.md)


## Documentation For Authorization


## BBOAuth2

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://app.bombbomb.com/auth/authorize
- **Scopes**: 
 - **all:manage**: Manage All
 - **all:read**: Read All
 - **email:manage**: Manage Email
 - **email:read**: Read Email
 - **video:manage**: Manage Video
 - **video:read**: Read Video
 - **contact:manage**: Manage Contact
 - **contact:read**: Read Contact
 - **automation:manage**: Manage Automation
 - **automation:read**: Read Automation
 - **form:manage**: Manage Form
 - **form:read**: Read Form
 - **team:manage**: Manage Team
 - **team:read**: Read Team
 - **settings:manage**: Manage Settings


## Author





# .
Australia’s Leading Messaging Solutions for Business and Enterprise.

- API version: 1.0.0
- Build date: 2016-08-03T00:27:53.564Z

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
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
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

// Configure API key authorization: hmac
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new MessageMedia\RESTAPI\Api\DeliveryReportsApi();
$delivery_report_id = new \MessageMedia\RESTAPI\Model\DeliveryReportId(); // \MessageMedia\RESTAPI\Model\DeliveryReportId | A list of delivery report IDs to mark as confirmed.
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $api_instance->deliveryReportsConfirmedPost($delivery_report_id, $account);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportsApi->deliveryReportsConfirmedPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.messagemedia.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeliveryReportsApi* | [**deliveryReportsConfirmedPost**](docs/Api/DeliveryReportsApi.md#deliveryreportsconfirmedpost) | **POST** /delivery_reports/confirmed | Confirm the receipt of delivery reports.
*DeliveryReportsApi* | [**deliveryReportsGet**](docs/Api/DeliveryReportsApi.md#deliveryreportsget) | **GET** /delivery_reports | This endpoint is used to check for unconfirmed reports.
*MessagingApi* | [**messagesMessageIdGet**](docs/Api/MessagingApi.md#messagesmessageidget) | **GET** /messages/{messageId} | Retrive the status and details of a submitted message.
*MessagingApi* | [**messagesMessageIdPut**](docs/Api/MessagingApi.md#messagesmessageidput) | **PUT** /messages/{messageId} | Update the status of a submitted message.
*MessagingApi* | [**messagesPost**](docs/Api/MessagingApi.md#messagespost) | **POST** /messages | Send one or more SMS or text to voice messages.
*RepliesApi* | [**repliesConfirmedPost**](docs/Api/RepliesApi.md#repliesconfirmedpost) | **POST** /replies/confirmed | Confirm the receipt of replies.
*RepliesApi* | [**repliesGet**](docs/Api/RepliesApi.md#repliesget) | **GET** /replies | Check for unconfirmed replies.


## Documentation For Models

 - [DeliveryReport](docs/Model/DeliveryReport.md)
 - [DeliveryReportId](docs/Model/DeliveryReportId.md)
 - [DeliveryReports](docs/Model/DeliveryReports.md)
 - [Error](docs/Model/Error.md)
 - [ErrorDetails](docs/Model/ErrorDetails.md)
 - [Message](docs/Model/Message.md)
 - [MessageList](docs/Model/MessageList.md)
 - [MessageMetadata](docs/Model/MessageMetadata.md)
 - [Messages](docs/Model/Messages.md)
 - [NewMessage](docs/Model/NewMessage.md)
 - [Replies](docs/Model/Replies.md)
 - [Reply](docs/Model/Reply.md)
 - [ReplyId](docs/Model/ReplyId.md)
 - [Status](docs/Model/Status.md)


## Documentation For Authorization


## hmac

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author





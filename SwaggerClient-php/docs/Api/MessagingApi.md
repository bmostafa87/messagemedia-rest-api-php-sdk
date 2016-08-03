# Swagger\Client\MessagingApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messagesMessageIdGet**](MessagingApi.md#messagesMessageIdGet) | **GET** /messages/{messageId} | Retrive the status and details of a submitted message.
[**messagesMessageIdPut**](MessagingApi.md#messagesMessageIdPut) | **PUT** /messages/{messageId} | Update the status of a submitted message.
[**messagesPost**](MessagingApi.md#messagesPost) | **POST** /messages | Send one or more SMS or text to voice messages.


# **messagesMessageIdGet**
> \Swagger\Client\Model\Message messagesMessageIdGet($message_id, $account)

Retrive the status and details of a submitted message.

Get the status and details of a previously submitted message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: hmac
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\MessagingApi();
$message_id = "message_id_example"; // string | Unique identifier representing message that has been submitted
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $result = $api_instance->messagesMessageIdGet($message_id, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagesMessageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Unique identifier representing message that has been submitted |
 **account** | **string**| The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts. | [optional]

### Return type

[**\Swagger\Client\Model\Message**](../Model/Message.md)

### Authorization

[hmac](../../README.md#hmac)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesMessageIdPut**
> messagesMessageIdPut($message_id, $status, $account)

Update the status of a submitted message.

Update the status of a scheduled message to cancelled to prevent the message from being sent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: hmac
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\MessagingApi();
$message_id = "message_id_example"; // string | Unique identifier representing message to be updated.
$status = new \Swagger\Client\Model\Status(); // \Swagger\Client\Model\Status | New status for the message.
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $api_instance->messagesMessageIdPut($message_id, $status, $account);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagesMessageIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Unique identifier representing message to be updated. |
 **status** | [**\Swagger\Client\Model\Status**](../Model/\Swagger\Client\Model\Status.md)| New status for the message. |
 **account** | **string**| The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts. | [optional]

### Return type

void (empty response body)

### Authorization

[hmac](../../README.md#hmac)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesPost**
> \Swagger\Client\Model\MessageList messagesPost($messages, $account)

Send one or more SMS or text to voice messages.

Submit one or more (up to 100 per request) SMS or text to voice messages to be sent to the destination address. - A callback URL can be included with each message to which MO and DR notifications will be pushed to via a HTTP POST request. - The content of the message can be a unicode string, up to 5000 characters long - A delivery report can be be requested with the message which will be pushed to a HTTP endpoint if specified, or available via the Check Reports endpoint. - The destination number should be specified in E.164 international format. For information on E.164, please refer to http://en.wikipedia.org/wiki/E.164 - The format specifies which format the message will be sent as, SMS or VOICE - If specified the source number included in the request will be shown as the source number for the message, this feature is not enabled by default, please contact MessageMedia for more information. - If a source number is specified, the type of source number may also be specified. - The message will be scheduled to be delivered in the future if the scheduled parameter is specified. - A message expiry timestamp can be provided, if the message is not delivered by this time, it will be discarded. - Metadata can be included with the message. Up to 5 key value pair strings can be included with each message. This metadata will be available in delivery reports and replies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: hmac
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\MessagingApi();
$messages = new \Swagger\Client\Model\Messages(); // \Swagger\Client\Model\Messages | A list of messages to be sent.
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $result = $api_instance->messagesPost($messages, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->messagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messages** | [**\Swagger\Client\Model\Messages**](../Model/\Swagger\Client\Model\Messages.md)| A list of messages to be sent. |
 **account** | **string**| The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts. | [optional]

### Return type

[**\Swagger\Client\Model\MessageList**](../Model/MessageList.md)

### Authorization

[hmac](../../README.md#hmac)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


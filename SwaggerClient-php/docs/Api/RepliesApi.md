# Swagger\Client\RepliesApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**repliesConfirmedPost**](RepliesApi.md#repliesConfirmedPost) | **POST** /replies/confirmed | Confirm the receipt of replies.
[**repliesGet**](RepliesApi.md#repliesGet) | **GET** /replies | Check for unconfirmed replies.


# **repliesConfirmedPost**
> repliesConfirmedPost($reply_id, $account)

Confirm the receipt of replies.

The confirm replies endpoint will update the specified replies as confirmed, confirmed replies will no longer be returned in check replies requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: hmac
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\RepliesApi();
$reply_id = new \Swagger\Client\Model\ReplyId(); // \Swagger\Client\Model\ReplyId | A list of reply IDs to mark as confirmed.
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $api_instance->repliesConfirmedPost($reply_id, $account);
} catch (Exception $e) {
    echo 'Exception when calling RepliesApi->repliesConfirmedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reply_id** | [**\Swagger\Client\Model\ReplyId**](../Model/\Swagger\Client\Model\ReplyId.md)| A list of reply IDs to mark as confirmed. |
 **account** | **string**| The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts. | [optional]

### Return type

void (empty response body)

### Authorization

[hmac](../../README.md#hmac)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repliesGet**
> \Swagger\Client\Model\Replies repliesGet($account)

Check for unconfirmed replies.

The replies endpoint returns the first 100 reply messages that have been received and haven't been confirmed using the confirm replies endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: hmac
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\RepliesApi();
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $result = $api_instance->repliesGet($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepliesApi->repliesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**| The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts. | [optional]

### Return type

[**\Swagger\Client\Model\Replies**](../Model/Replies.md)

### Authorization

[hmac](../../README.md#hmac)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


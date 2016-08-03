# Swagger\Client\DeliveryReportsApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliveryReportsConfirmedPost**](DeliveryReportsApi.md#deliveryReportsConfirmedPost) | **POST** /delivery_reports/confirmed | Confirm the receipt of delivery reports.
[**deliveryReportsGet**](DeliveryReportsApi.md#deliveryReportsGet) | **GET** /delivery_reports | This endpoint is used to check for unconfirmed reports.


# **deliveryReportsConfirmedPost**
> deliveryReportsConfirmedPost($delivery_report_id, $account)

Confirm the receipt of delivery reports.

The confirm delivery reports endpoint will update the specified delivery reports as confirmed, confirmed delivery reports will no longer be returned in check delivery reports requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: hmac
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\DeliveryReportsApi();
$delivery_report_id = new \Swagger\Client\Model\DeliveryReportId(); // \Swagger\Client\Model\DeliveryReportId | A list of delivery report IDs to mark as confirmed.
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $api_instance->deliveryReportsConfirmedPost($delivery_report_id, $account);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportsApi->deliveryReportsConfirmedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_report_id** | [**\Swagger\Client\Model\DeliveryReportId**](../Model/\Swagger\Client\Model\DeliveryReportId.md)| A list of delivery report IDs to mark as confirmed. |
 **account** | **string**| The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts. | [optional]

### Return type

void (empty response body)

### Authorization

[hmac](../../README.md#hmac)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deliveryReportsGet**
> \Swagger\Client\Model\DeliveryReports deliveryReportsGet($account)

This endpoint is used to check for unconfirmed reports.

The reports endpoint returns the first 100 delivery reports that have been received and haven't been confirmed using the confirm reports endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: hmac
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\DeliveryReportsApi();
$account = "account_example"; // string | The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts.

try {
    $result = $api_instance->deliveryReportsGet($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportsApi->deliveryReportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**| The account to use for this request. This account will be used for the request instead of the account assigned to the API key used to sign the request, allowing one API key to be used to perform requests on behalf of other accounts. | [optional]

### Return type

[**\Swagger\Client\Model\DeliveryReports**](../Model/DeliveryReports.md)

### Authorization

[hmac](../../README.md#hmac)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


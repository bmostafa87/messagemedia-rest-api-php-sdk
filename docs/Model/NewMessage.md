# NewMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | Content of message. | 
**callback_url** | **string** | URL replies and delivery reports to this message will be pushed to. | [optional] 
**delivery_report** | **bool** |  | [optional] [default to false]
**destination_number** | **string** | Destination number of the message. | 
**format** | **string** | Format of message. | [optional] [default to 'SMS']
**metadata** | [**\MessageMedia\RESTAPI\Model\MessageMetadata**](MessageMetadata.md) |  | [optional] 
**message_expiry_timestamp** | [**\DateTime**](\DateTime.md) | Date time after which the message is considered expired in ISO8601 format. | [optional] 
**scheduled** | [**\DateTime**](\DateTime.md) | Date time at which the message is scheduled for in ISO8601 format. | [optional] 
**source_address** | **string** |  | [optional] 
**source_address_type** | **string** | Type of source address specified. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



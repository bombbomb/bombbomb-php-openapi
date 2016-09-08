# JerichoConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**clientGroupId** | **string** |  | [optional] 
**sendDate** | [**\DateTime**](\DateTime.md) | When the email should be sent. | [optional] 
**isPrompt** | **bool** | Determines whether this is a static or prompted send. | 
**emailId** | **string** | Static send: The Email to send on behalf of the group members. | [optional] 
**promptSubject** | **string** | Video Prompt: The subject line prompting the user to record a video. | [optional] 
**promptBody** | **string** | Video Prompt: The HTML body of the email prompting the user to record a video. | [optional] 
**emailSubject** | **string** | Video Prompt: The subject line of the final sent email | [optional] 
**emailBody** | **string** | Video Prompt: The HTML body of the final sent email. | [optional] 
**sendWithoutVideo** | **bool** | Video Prompt: Whether to send the final email if no video was recorded. | [optional] 
**status** | **string** | The state of the send. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



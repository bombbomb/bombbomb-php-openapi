# JerichoConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**clientGroupId** | **string** |  | [optional] 
**sendDate** | [**\DateTime**](\DateTime.md) | When the email should be sent. | [optional] 
**isPrompt** | **bool** | Video Prompt: Determines whether this is a static or prompted send. | 
**printToTemplate** | **bool** | Controls whether or not the content is printed into a template. | [optional] 
**emailId** | **string** | Static send: The Email to send on behalf of the group members. | [optional] 
**exampleVideoId** | **string** | Video Prompt: The Video to include as an example for prompted users. | [optional] 
**followUpVideoId** | **string** | The Video to include in the tracking follow up. | [optional] 
**promptIntro** | **string** | Video Prompt: The intro text directed toward prompted users. | [optional] 
**promptSubject** | **string** | Video Prompt: The subject line prompting the user to record a video. | [optional] 
**promptBody** | **string** | Video Prompt: The HTML body of the email prompting the user to record a video. | [optional] 
**emailSubject** | **string** | Video Prompt: The subject line of the final sent email | [optional] 
**emailBody** | **string** | Video Prompt: The HTML body of the final sent email. | [optional] 
**sendWithoutVideo** | **bool** | Video Prompt: Whether to send the final email if no video was recorded. | [optional] 
**status** | **string** | The state of the send. | [optional] 
**mediaType** | **string** | The type of media used for a social send | [optional] 
**customInitialEmailSubjectLine** | **string** | The custom subject line for the prompt initial email | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



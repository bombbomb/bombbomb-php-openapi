# VideoEmailPrompt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the prompt. Read Only. | [optional] 
**userId** | **string** | The prompt&#39;s owner. Read Only. | [optional] 
**templateId** | **string** | Optional. The email template to be used in the sent email, if none supplied, the users&#39; default will be applied. | [optional] 
**emailSubjectLine** | **string** | The subject line of the final email | 
**emailContent** | **string** | The HTML content of the final email | 
**thumbnailUrl** | **string** | The URL of a thumbnail image for this prompt | [optional] 
**contactId** | **string** | Contact Id to send the final email to | [optional] 
**toLists** | **string[]** | List Ids to send the final email to | [optional] 
**jerichoId** | **string** | If sent in a jericho context, this will have the jericho id | [optional] 
**promptSubject** | **string** | The prompt&#39;s subject line | 
**promptHtml** | **string** | The suggested script of the prompt. | 
**promptIntro** | **string** | A paragraph intro statement about the purpose of the email you&#39;re recording a video for. | [optional] 
**exampleVideoId** | **string** | An example or explanatory video to help the user understand what to say. | [optional] 
**followupVideoId** | **string** | An example or explanatory video to help the user understand what to say. | [optional] 
**sendWithoutVideo** | **bool** | Whether to send the email if no video is recorded. If set to require a video, and none is added before the videoDueDate, the prompt is cancelled. | [optional] 
**videoDueDate** | [**\DateTime**](\DateTime.md) | When the video must be recorded by | [optional] 
**scheduledSendDate** | [**\DateTime**](\DateTime.md) | When the final email is scheduled to be sent | 
**videoId** | **string** | The video that was added to the prompt. Read Only. | [optional] 
**emailId** | **string** | The email that was created by the prompt Read Only. | [optional] 
**jobId** | **string** | The job sent by the prompt Read Only. | [optional] 
**promptBotId** | **string** | The bot that created the prompt. | [optional] 
**clientGroupId** | **string** | The client group campaign that created the prompt. | [optional] 
**status** | **int** | The status of the prompt: created &#x3D; 0, sent &#x3D; 10, recorded &#x3D; 20, job_created &#x3D; 30, timed_out &#x3D; 40, declined &#x3D; 50 Read Only | [optional] 
**applyTemplate** | **bool** | Controls whether a user template is applied to the message as it is sent | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | When the email was first sent out | [optional] 
**lastNotified** | [**\DateTime**](\DateTime.md) | When the user was last notified about a prompt email waiting for a video | [optional] 
**facebookMessage** | **string** | The facebook message to be passed off to social sender | [optional] 
**twitterMessage** | **string** | The twitter message to be passed off to social sender | [optional] 
**linkedinMessage** | **string** | The linkedin message to be passed off to social sender | [optional] 
**sendMechanism** | **string** | The sendMechanism property | [optional] 
**hasSocial** | **bool** | this determines whether or not it has a social content. | [optional] 
**sendTypes** | **string[]** | The types of mechanisms this prompt can send. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



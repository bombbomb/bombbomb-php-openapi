# VideoEmailPrompt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the prompt. Read Only. | [optional] 
**userId** | **string** | The prompt&#39;s owner. Read Only. | [optional] 
**templateId** | **string** | Optional. The email template to be used in the sent email, if none supplied, the users&#39; default will be applied. | [optional] 
**emailSubjectLine** | **string** | The subject line of the final email | 
**emailContent** | **string** | The HTML content of the final email | 
**toEmailAddresses** | **string[]** | Email addresses to send the final email to, can be mixed with listIds. | [optional] 
**toLists** | **string[]** | List Ids to send the final email to | [optional] 
**jerichoId** | **string** | If sent in a jericho context, this will have the jericho id | [optional] 
**promptSubject** | **string** | The prompt&#39;s subject line | 
**promptHtml** | **string** | The HTML body of the prompt | 
**sendWithoutVideo** | **bool** | Whether to send the email if no video is recorded. If set to require a video, and none is added before the videoDueDate, the prompt is cancelled. | [optional] 
**videoDueDate** | [**\DateTime**](\DateTime.md) | When the video must be recorded by | [optional] 
**scheduledSendDate** | [**\DateTime**](\DateTime.md) | When the final email is scheduled to be sent | 
**videoId** | **string** | The video that was added to the prompt. Read Only. | [optional] 
**emailId** | **string** | The email that was created by the prompt Read Only. | [optional] 
**jobId** | **string** | The job sent by the prompt Read Only. | [optional] 
**status** | **int** | The status of the prompt: created &#x3D; 0, sent &#x3D; 10, recorded &#x3D; 20, job_created &#x3D; 30, timed_out &#x3D; 40, declined &#x3D; 50 Read Only | [optional] 
**doNotApplyTemplate** | **bool** | Controls whether a user template is applied to the message as it is sent | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



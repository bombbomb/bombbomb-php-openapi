# PromptSocialPrompt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the prompt. Read Only. | [optional] 
**userId** | **string** | The prompt&#39;s owner. Read Only. | [optional] 
**jerichoId** | **string** | If sent in a jericho context, this will have the jericho id | [optional] 
**promptSubject** | **string** | The prompt&#39;s subject line | [optional] 
**promptHtml** | **string** | The suggested script of the prompt. | [optional] 
**scheduledSendDate** | [**\DateTime**](\DateTime.md) | When the final email is scheduled to be sent | [optional] 
**clientGroupId** | **string** | The client group campaign that created the prompt. | [optional] 
**thumbnailUrl** | **string** | The URL of a thumbnail image for this prompt | [optional] 
**status** | **int** | The status of the prompt: created &#x3D; 0, sent &#x3D; 10, recorded &#x3D; 20, job_created &#x3D; 30, timed_out &#x3D; 40, declined &#x3D; 50 Read Only | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | When the email was first sent out | [optional] 
**lastNotified** | [**\DateTime**](\DateTime.md) | When the user was last notified about a prompt email waiting for a video | [optional] 
**sendMechanism** | [**\DateTime**](\DateTime.md) | The sendMechanism property | [optional] 
**sendTypes** | **string[]** | The types of mechanisms this prompt can send. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



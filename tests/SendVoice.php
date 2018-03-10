<?php

use itbdw\SendCloud\Util\Attachment;
use itbdw\SendCloud\Util\HttpClient;
use itbdw\SendCloud\Util\Mail;
use itbdw\SendCloud\Util\Mimetypes;
use itbdw\SendCloud\Util\MsgType;
use itbdw\SendCloud\Util\Response;
use itbdw\SendCloud\Util\SmsMsg;
use itbdw\SendCloud\Util\TemplateContent;
use itbdw\SendCloud\Util\VoiceMsg;

use itbdw\SendCloud\SendCloud;
use itbdw\SendCloud\SendCloudSMS;


function sendVoice(){
	$SMS_USER = "***";
	$SMS_KEY = "***";
	$sendSms=new SendCloudSMS($SMS_USER, $SMS_KEY);
	$voiceMsg=new VoiceMsg();
	$voiceMsg->setCode("1234");
	$voiceMsg->setPhone("13871506390");
	//$voiceMsg->setTimestamp(time());
	$resonse=$sendSms->sendVoice($voiceMsg);
	echo $resonse->body();

}


sendVoice();
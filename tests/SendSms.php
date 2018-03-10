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


function sendsms(){
	$SMS_USER = "***";
	$SMS_KEY = "***";
	$smsTemplateId = 1;
	$sendSms=new SendCloudSMS($SMS_USER, $SMS_KEY);
	$smsMsg=new SmsMsg();
	$smsMsg->addPhoneList(array("13871506390"));
	$smsMsg->addVars("code", "1234");
	$smsMsg->setTemplateId($smsTemplateId);
	$smsMsg->setTimestamp(time());
	$resonse= $sendSms->send($smsMsg);
	echo $resonse->body();
	
}


function sendMms(){
	$SMS_USER = "***";
	$SMS_KEY = "***";
	$mmsTemplateId = 320;
	$sendSms=new SendCloudSMS($SMS_USER, $SMS_KEY);
	$smsMsg=new SmsMsg();
	$smsMsg->addPhoneList(array("13871506390"));
	$smsMsg->addVars("code", "1234");
	$smsMsg->setMsgType(MsgType::MMS);
	
	$smsMsg->addMapVars(array("name"=>'xiao'));
	$smsMsg->setTemplateId($mmsTemplateId);
	$smsMsg->setTimestamp(time());
	$resonse=$sendSms->send($smsMsg);
	echo $resonse->body();
		
}







sendsms();
 
//sendMms();
 
 


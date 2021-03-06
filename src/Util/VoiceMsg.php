<?php
/**
 * Created by PhpStorm.
 * User: zhaobinyan
 * Date: 2018/3/10
 * Time: 下午3:51
 */

namespace itbdw\SendCloud\Util;

/**
 * 语音消息
 *
 * @param
 *        	phone 收信人手机号
 * @param
 *        	code 验证码
 * @param
 *        	signature 签名, 合法性验证
 * @param
 *        	timestamp 时间戳
 * @author xjm
 *
 */
class VoiceMsg implements \JsonSerializable {
    private $phone;
    private $code;
    private $signature;
    private $timestamp;
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function setCode($code) {
        $this->code = $code;
    }
    public function getCode() {
        return $this->code;
    }
    public function setSignature($signature) {
        $this->signature = $signature;
    }
    public function getSignature() {
        return $this->signature;
    }
    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
    public function getTimestamp() {
        return $this->timestamp;
    }
    public function jsonSerialize() {
        return array_filter ( [
            'phone' => $this->getPhone (),
            'code' => $this->getCode (),
            'signature' => $this->getSignature (),
            'timestamp' => $this->getTimestamp ()
        ] );
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: zhaobinyan
 * Date: 2018/3/10
 * Time: 下午3:50
 */

namespace itbdw\SendCloud\Util;

class TemplateContent {
    private $template_vars;
    private $template_invoke_name;
    public function getTemplateVars() {
        return $this->template_vars;
    }
    public function addVars($key, $value = array()) {
        $this->template_vars [$key] = $value;
    }
    public function setTemplateInvokeName($invoke_name) {
        $this->template_invoke_name = $invoke_name;
    }
    public function getTemplateInvokeName() {
        return $this->template_invoke_name;
    }
}
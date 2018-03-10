<?php

namespace itbdw\SendCloud;

class Config {
    /**
     * @return array
     */
    public static function getConfig() {
        $config=array();

        $config['v1']['send']='/webapi/mail.send.json';
        $config['v1']['sendTemplate']='/webapi/mail.send_template.json';

        $config['v2']['send']='/mail/send';
        $config['v2']['sendTemplate']='/mail/sendtemplate';
        return $config;
    }
}





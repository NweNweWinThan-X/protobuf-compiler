<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messages/user.proto

namespace GPBMetadata\Messages;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b020a136d657373616765732f757365722e70726f746f121d6d797468" .
            "726e722e677270635f6578616d706c652e6d657373616765732280010a04" .
            "55736572120a0a026964180120012803120c0a046e616d65180220012809" .
            "122e0a0a637265617465645f617418032001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d70122e0a0a757064617465645f" .
            "617418042001280b321a2e676f6f676c652e70726f746f6275662e54696d" .
            "657374616d70425a5a396769746875622e636f6d2f6d797468726e722f67" .
            "7270632d636f6d70696c65722f6578616d706c65732f676f6c616e672f6d" .
            "65737361676573ca021c4d797468726e725c477270634578616d706c655c" .
            "4d65737361676573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}


<?php
namespace Encryption\Exception;
class RsaKeyErrorException extends \Exception
{
    /**
     * OpensslNotLoadException constructor.
     */
    public function __construct($message = "", $code = 0)
    {
        $message = "不是有效的公钥或密钥";
        if (PHP_SAPI == "cli") {
            $message = iconv("utf-8", "gb2312//IGNORE", $message);
        }
        parent::__construct($message, $code);
    }
}
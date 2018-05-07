<?php
namespace ArPhp;

include (__DIR__ . '/I18N/Arabic.php');


class Arabic extends \I18N_Arabic{
    public $library;
    public function __construct($library = null, $useAutoload = false, $useException = false, $compatibleMode = true)
    {
        if($library == null && !empty($this->library))
            $library = $this->library;
        parent::__construct($library, $useAutoload, $useException, $compatibleMode);
    }
}
<?php
namespace ZF2Bbcode\View\Helper;

use Decoda\Decoda;
use Decoda\Hook\EmoticonHook;
use Zend\View\Helper\AbstractHelper;

class Bbcode extends AbstractHelper
{

    public function __invoke($request)
    {
        $bbcode = new Decoda($request);
        $bbcode->defaults();
        $bbcode->addHook(new EmoticonHook(array('path' => '../../images/emoticons/')));
        return $bbcode->parse();
    }
}

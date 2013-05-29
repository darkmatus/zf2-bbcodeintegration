<?php
namespace ZF2Bbcode\View\Helper;

use Decoda\Decoda;
use Zend\View\Helper\AbstractHelper;

class Bbcode extends AbstractHelper
{

    public function __invoke($request)
    {
        $bbcode = new Decoda($request);
        $bbcode->defaults();
        return $bbcode->parse();
    }
}

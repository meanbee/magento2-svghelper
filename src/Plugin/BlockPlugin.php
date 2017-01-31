<?php

namespace Meanbee\SVGHelper\Plugin;

class BlockPlugin
{
    protected $_svgHelper;

    public function __construct(
        \Meanbee\SVGHelper\Helper\Data $svgHelper
    )
    {
        $this->_svgHelper = $svgHelper;
    }

    public function afterCreateBlock($subject, $result)
    {
        return $result->setData('svgHelper', $this->_svgHelper);
    }
}

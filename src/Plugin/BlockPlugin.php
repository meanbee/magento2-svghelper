<?php

namespace Meanbee\SVGHelper\Plugin;

class BlockPlugin
{
    protected $svgHelper;

    public function __construct(
        \Meanbee\SVGHelper\Helper\Data $svgHelper
    ) {
        $this->svgHelper = $svgHelper;
    }

    public function afterCreateBlock($subject, $result)
    {
        return $result->setData('svgHelper', $this->svgHelper);
    }
}

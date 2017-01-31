<?php

namespace Meanbee\SVGHelper\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    protected $_assetSource;
    protected $_assetRepository;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\View\Asset\Source $assetSource,
        \Magento\Framework\View\Asset\Repository $assetRepository
    )
    {
        $this->_assetSource = $assetSource;
        $this->_assetRepository = $assetRepository;

        parent::__construct($context);
    }

    /**
     * @param $path
     *
     * @return bool|string
     */
    public function getViewSvg($path)
    {
        $file = $this->_assetRepository->createAsset($path);
        return $this->_assetSource->getContent($file);
    }

}

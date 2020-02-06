<?php

namespace Meanbee\SVGHelper\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    protected $assetSource;
    protected $assetRepository;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\View\Asset\Source $assetSource,
        \Magento\Framework\View\Asset\Repository $assetRepository
    ) {
        $this->assetSource = $assetSource;
        $this->assetRepository = $assetRepository;

        parent::__construct($context);
    }

    /**
     * @param $path
     *
     * @return bool|string
     */
    public function getViewSvg($path)
    {
        $file = $this->assetRepository->createAsset($path);
        return $this->assetSource->getContent($file);
    }
}

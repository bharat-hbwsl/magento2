<?php

declare(strict_types=1);

namespace Training\WidgetExample\Block\WIdget;


use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Ttitle extends Template implements BlockInterface
{
    protected $_template = 'widget/title.phtml';

}
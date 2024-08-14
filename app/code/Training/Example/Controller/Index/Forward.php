<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;


class Forward implements ActionInterface
{
    protected $forwardFactory;

    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    public function execute()
    {
        return $this->forwardFactory->create()->forward('page');
    }
}
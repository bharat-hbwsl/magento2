<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;


class Json implements ActionInterface
{
    protected $jsonFactory;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        return $this->jsonFactory->create()->setData([
            'name' => 'Gautam Dadhich',
            'job' => 'Full Stack Developer'
        ]);
    }
}
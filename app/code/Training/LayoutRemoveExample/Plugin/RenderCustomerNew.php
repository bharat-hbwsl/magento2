<?php

declare(strict_types=1);

namespace Training\LayoutRemoveExample\Plugin;

use Magento\Framework\App\RequestInterface;

class RenderCustomerNew
{
    protected $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request; 
    }

    public function afterGetAttribute(\Magento\Framework\Data\Structure $subject, $result, $elementId, $attribute)
    {
        if ($this->request->getFullActionName() === "customer_account_login") {
            if ($elementId === "customer.new" && $attribute === "display") {
                return 'true'; // This will display the block
                // return 'false'; // This will Hide the block
            }
        }

        return $result; 
    }
}

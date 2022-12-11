<?php

declare(strict_types=1);

namespace RLTSquare\Unit3\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Environment implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'Staging', 'label' => __('Staging')],
            ['value' => 'Development', 'label' => __('Development')],
            ['value' => 'Production', 'label' => __('Production')]
        ];
    }
}
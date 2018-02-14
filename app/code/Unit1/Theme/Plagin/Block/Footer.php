<?php
namespace Unit1\Theme\Plagin\Block;

class Footer
{
    /**
     * Заменяем copyright
     * 
     * @param \Magento\Theme\Block\Html\Footer $footer
     * @param string $copyright
     * @return string
     */
    public function afterGetCopyright(
        \Magento\Theme\Block\Html\Footer $footer,
        $copyright
    )
    {
        $copyright = 'Customized copyright!';
        return $copyright;
    }
}
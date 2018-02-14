<?php
namespace Unit1\Theme\Plagin\Block;

class Breadcrumbs
{
    /**
     * Μενÿεμ Crumb label
     *
     * @param \Magento\Theme\Block\Html\Breadcrumbs $breadcrumbs
     * @param \Closure $proceed
     * @param string $crumbName
     * @param array $crumbInfo
     * @return $this
     */
    public function aroundAddCrumb(
        \Magento\Theme\Block\Html\Breadcrumbs $breadcrumbs,
        $proceed,
        $crumbName, 
        $crumbInfo)
    {
        $crumbInfo["label"] = $crumbInfo["label"] . ' ! ';
        $result = $proceed($crumbName, $crumbInfo);
        return $result;
    }
}
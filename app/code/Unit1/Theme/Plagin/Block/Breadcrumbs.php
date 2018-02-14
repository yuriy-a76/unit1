<?php
namespace Unit1\Theme\Plagin\Block;

class Breadcrumbs
{
    /**
     * Replase Crumb label
     *
     * @param \Magento\Theme\Block\Html\Breadcrumbs $breadcrumbs
     * @param \Closure $proceed
     * @param string $crumbName
     * @param array $crumbInfo
     * @return $result
     */
    public function aroundAddCrumb(
        \Magento\Theme\Block\Html\Breadcrumbs $breadcrumbs,
        $proceed,
        $crumbName, 
        $crumbInfo)
    {
        // add ' ! '
        $crumbInfo["label"] = $crumbInfo["label"] . ' ! ';
        
        $result = $proceed($crumbName, $crumbInfo);
        return $result;
    }
}
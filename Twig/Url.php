<?php

namespace Mapado\TwigExtensionsBundle\Twig;

/**
 * Url
 * 
 * @author Julien Deniau <julien.deniau@mapado.com>
 */
class Url extends \Twig_Extension
{
    /**
     * getFilters
     *
     * @access public
     * @return array
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('parse_url', array($this, 'parseUrl'))
        );
    }

    /**
     * getUrlHost
     *
     * @param string $url url
     * @access public
     * @return string
     */
    public function parseUrl($url, $component)
    {
        $componentList =  parse_url($url);
        
        if (isset($componentList[$component])) {
            return $componentList[$component];
        }

        return false;
    }

    /**
     * getName
     *
     * @access public
     * @return string
     */
    public function getName()
    {
        return 'mapado_twigextensionsbundle_url';
    }
}


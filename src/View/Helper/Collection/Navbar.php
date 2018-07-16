<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace KryuuCommon\Components\View\Helper\Collection;

use Zend\View\Exception;
use Zend\View\Helper\Partial;
use Zend\View\Model\ViewModel;
use Zend\View\Model\ModelInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Helper for ordered and unordered lists
 */
class Navbar extends AbstractHelper
{
    /**
     * Renders a template fragment within a variable scope distinct from the
     * calling View object. It proxies to view's render function
     *
     * @param  string|ModelInterface $name   Name of view script, or a view model
     * @param  array|object          $values Variables to populate in the view
     * @throws Exception\RuntimeException
     * @return string|Partial
     */
    public function __invoke($logo, $href, $params = [])
    {
        return $this->getView()->render('component/collection/navbar', [
            'logo' => $logo,
            'href' => $href,
            'param' => $params,
        ]);
    }
}

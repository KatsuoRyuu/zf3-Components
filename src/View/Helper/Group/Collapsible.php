<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace KryuuCommon\Components\View\Helper\Group;

use Zend\View\Exception;
use Zend\View\Helper\Partial;
use Zend\View\Model\ViewModel;
use Zend\View\Model\ModelInterface;
use Zend\View\Helper\AbstractHelper;
use KryuuCommon\Components\Entity\CollapsibleItem;

/**
 * Helper for ordered and unordered lists
 */
class Collapsible extends AbstractHelper
{
    /**
     * Variable to which object will be assigned
     *
     * @var string
     */
    protected $objectKey;

    /**
     * Renders a template fragment within a variable scope distinct from the
     * calling View object. It proxies to view's render function
     *
     * @param  string|ModelInterface $name   Name of view script, or a view model
     * @param  array|object          $values Variables to populate in the view
     * @throws Exception\RuntimeException
     * @return string|Partial
     */
    public function __invoke($items)
    {
        $colItems = [];
        foreach ($items as $item) {
            if (! $item instanceof CollapsibleItem) {
                $item = new CollapsibleItem($item);
            }
            $colItems[] = $item;
        }

        return $this->getView()->render('component/group/collapsible', [
            'items' => $colItems
        ]);
    }
}

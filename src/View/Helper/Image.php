<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace KryuuCommon\Components\View\Helper;

use Zend\View\Exception;
use Zend\View\Helper\Partial;
use Zend\View\Model\ViewModel;
use Zend\View\Model\ModelInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Helper for ordered and unordered lists
 */
class Image extends AbstractHelper
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
    public function __invoke($src = null, $class = [], $style = [])
    {
        if (! $src) {
            $src = 'https://images.unsplash.com/photo-1508128376479-d7979f3b30bf?ixlib=rb-0.3.5&s=d69675e9a3fc98480e76b3f13fb2a2fe&auto=format&fit=crop&w=1351&q=80';
        }

        return $this->getView()->render('component/image', [
            'src' => $src,
            'class' => count($class) > 0
                ? 'class="' . implode(' ', $class) . '" ' : '',
            'style' => count($style) > 0
                ? 'style="' . implode(';', $style) . '" ' : '',
        ]);
    }
}

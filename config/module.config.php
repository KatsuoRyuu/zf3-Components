<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonLanding for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace KryuuCommon\Components;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use KryuuCommon\Components\View\Helper;
use KryuuCommon\Components\View\Helper\Group\Collapsible;

return [
    'view_helpers' => [
        'aliases' => [
            'image'         => Helper\Image::class,
            'button'        => Helper\Form\Button::class,
            'button'        => Helper\Form\TextInput::class,
            'collapsible'   => Helper\Group\Collapsible::class,
            'navbar'        => Helper\Collection\Navbar::class,
        ],
        'factories' => [
            Helper\Image::class => InvokableFactory::class,
            Helper\Form\Button::class => InvokableFactory::class,
            Helper\Form\TextInput::class => InvokableFactory::class,
            Helper\Group\Collapsible::class => InvokableFactory::class,
            Helper\Collection\Navbar::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'component/image'               => __DIR__ . '/../view/component/image.phtml',
            'component/form/button'         => __DIR__ . '/../view/component/form/button.phtml',
            'component/group/collapsible'   => __DIR__ . '/../view/component/group/collapsible.phtml',
            'component/collection/navbar'   => __DIR__ . '/../view/component/collection/navbar.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];

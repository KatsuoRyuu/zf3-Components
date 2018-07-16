<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KryuuCommon\Components\Entity;

class CollapsibleItem
{



    private $icon;
    private $headline;
    private $content;

    public function __construct(array $values)
    {
        if (array_key_exists('icon', $values)) {
            $this->setIcon($values['icon']);
        }
        if (array_key_exists('headline', $values)) {
            $this->setHeadline($values['headline']);
        }
        if (array_key_exists('content', $values)) {
            $this->setContent($values['content']);
        }
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function getHeadline()
    {
        return $this->headline;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

    public function setHeadline($headline)
    {
        $this->headline = $headline;
        return $this;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}

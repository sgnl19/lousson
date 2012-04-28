<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 textwidth=75: *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Copyright (c) 2012 Mathias J. Hennig                                  *
 *                                                                       *
 * Permission to use, copy, modify, and/or distribute this software for  *
 * any purpose with or without fee is hereby granted, provided that the  *
 * above copyright notice and this permission notice appear in all       *
 * copies.                                                               *
 *                                                                       *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL         *
 * WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED         *
 * WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE      *
 * AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL  *
 * DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR *
 * PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER        *
 * TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR      *
 * PERFORMANCE OF THIS SOFTWARE.                                         *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Lousson\XML\Dialect\DOM;

/**
 *  Definition of the Lousson\XML\Dialect\DOM\AbstractComponent class.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *  @copyright  2012 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\XML\Dialect\AnyComponent;
use Lousson\XML\Dialect\DOM\ComponentList;
use Lousson\XML\Dialect\DOM\NamedComponentMap;
use Closure;
use DOMElement;

/**
 *  The Lousson\XML\Dialect\DOM\AbstractComponent class is an abstract
 *  base class for implementations of the Lousson\XML\Dialect\AnyComponent
 *  interface that are based on the Document Object Model.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 */
abstract class AbstractComponent implements AnyComponent
{
    /**
     *  @param  DOMElement                          $element
     *  @param  Lousson\XML\Dialect\AnyComponent    $context
     */
    final function __construct(
            DOMElement $element, AnyComponent $context = null)
    {
        $this->element = $element;
        $this->context = $context;
    }

    /**
     *  @param  string  $name
     *  @param  string  $nsuri
     *
     *  @return string
     */
    protected function getAttribute($name, $nsuri = null)
    {
        return null !== $nsuri
            ? $this->element->getAttributeNS($nsuri, $name)
            : $this->element->getAttribute($name);
    }

    /**
     *  @param  Closure     $callback
     *  @param  array       $filter
     *  @param  string      $nsuri
     *
     *  @return Lousson\XML\Dialect\ComponentList
     */
    protected function getComponentList(
            Closure $callback, array $filter, $nsuri = null)
    {
        return new ComponentList(
                $this->element, $callback, $filter, $nsuri
        );
    }

    /**
     *  @param  Closure     $callback
     *  @param  array       $filter
     *  @param  string      $nsuri
     *  @param  string      $key
     *
     *  @return Lousson\XML\Dialect\ComponentMap
     */
    protected function getComponentMap(
            Closure $callback, array $filter, $nsuri = null, $key = "name")
    {
        return new ComponentMap(
                $this->element, $callback, $filter, $nsuri, $key
        );
    }

    /**
     *  The getElement() method returns the DOM element that has been
     *  passed to the constructor. Note that this element should not get
     *  modified!
     *
     *  @return DOMElement
     */
    protected function getElement()
    {
        return $this->element;
    }

    /**
     *  The getContext() method returns the context component that has
     *  been passed to the constructor, if any.
     *
     *  @return Lousson\XML\Dialect\AnyComponent
     */
    protected function getContext()
    {
        return $this->context;
    }

    /**
     *  The Lousson\XML\Dialect\AbstractComponent::$element member stores
     *  the DOMElement that has been passed to the constructor.
     *
     *  @var DOMElement
     */
    private $element;

    /**
     *  The Lousson\XML\Dialect\AbstractComponent::$constructor object is
     *  the context component that has been passed to the constructor, if
     *  any.
     *
     *  @var Lousson\XML\Dialect\AnyComponent
     */
    private $context;
}


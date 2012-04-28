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
 *  Definition of the Lousson\XML\Dialect\DOM\AbstractNamedComponent class.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *  @copyright  2012 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\XML\Dialect\AnyNamedComponent;
use Lousson\XML\Dialect\DOM\AbstractComponent;

/**
 *  The Lousson\XML\Dialect\DOM\AbstractNamedComponent class is a base
 *  class for implementations of the Lousson\XML\Dialect\AnyNamedComponent
 *  interface that are based on the Document Object Model.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 */
abstract class AbstractNamedComponent
extends AbstractComponent implements AnyNamedComponent
{
    /**
     *  The getName() method will return the local name of the component
     *  within it's target namespace. It's default implementation considers
     *  the "name" attribute of the wrapped DOM element as container for
     *  that information.
     *
     *  @return string
     */
    public function getName()
    {
        $name = $this->getAttribute("name");
        assert("!empty(\$name)");
        return $name;
    }

    /**
     *  The getTargetNamespace() method will return the URI of the
     *  namespace the component has been specified for - or NULL, if no
     *  such URI has been defined. It's default implementation considers
     *  the "targetNamespace" attribute of either the wrapped DOM element
     *  or any of it's element anchestory in the same namespace as the
     *  container of that information.
     *
     *  @return string
     */
    public function getTargetNamespace()
    {
        for ($element = $this->getElement(), $node = $element;;) {

            if ($node->hasAttribute("targetNamespace")) {
                return $node->getAttribute("targetNamespace");
            }

            if (null === ($node = $node->parentNode)
                    || $node->namespaceURI !== $element->namespaceURI
                    || XML_ELEMENT_NODE !== $node->nodeType) {
                break;
            }
        }

        return null;
    }
}


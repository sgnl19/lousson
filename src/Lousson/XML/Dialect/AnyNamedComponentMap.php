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
namespace Lousson\XML\Dialect;

/**
 *  Definition of the Lousson\XML\Dialect\AnyNamedComponentMap interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *  @copyright  2012 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\XML\Dialect\AnyComponentList;

/**
 *  The Lousson\XML\Dialect\AnyNamedComponentMap interface declares an API
 *  for iterable objects that represent a set of zero or more instances of
 *  the Lousson\XML\Dialect\AnyNamedComponent interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 */
interface AnyNamedComponentMap extends AnyComponentList
{
    /**
     *  The getNamedItem() method shall return the map's item identified
     *  by the given $name and $targetNamespace URI.
     *
     *  @param  string  $name
     *  @param  string  $targetNamespace
     *
     *  @return Lousson\XML\Dialect\AnyNamedComponent
     *
     *  @throws Lousson\XML\Dialect\AnyException
     *          Raised in case no named component with the given $name and
     *          $targetNamespace is associated with the map
     */
    public function getNamedItem($name, $targetNamespace);

    /**
     *  The hasNamedItem() method shall return TRUE in case the map
     *  contains a component with the given $name and $targetNamespace
     *  URI, FALSE otherwise.
     *
     *  @param  string  $name
     *  @param  string  $targetNamespace
     *
     *  @return bool
     */
    public function hasNamedItem($name, $targetNamespace);
}


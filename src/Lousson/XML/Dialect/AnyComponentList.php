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
 *  Definition of the Lousson\XML\Dialect\AnyComponentList interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *  @copyright  2012 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Countable;
use Traversable;

/**
 *  The Lousson\XML\Dialect\AnyComponentList interface declares an API for
 *  iterable objects that represent a set of zero or more instances of the
 *  Lousson\XML\Dialect\AnyComponent interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *
 *  @see http://php.net/manual/en/class.countable.php
 *  @see http://php.net/manual/en/class.traversable.php
 */
interface AnyComponentList extends Countable, Traversable
{
    /**
     *  The getItem() method shall return the list's item at the given
     *  $index position.
     *
     *  @param  int     $index
     *
     *  @return Lousson\XML\Dialect\AnyComponent
     *
     *  @throws Lousson\XML\Dialect\AnyException
     *          Raised in case $index is below zero, greater or equal the
     *          list's length or not convertable into an integer at all
     */
    public function getItem($index);

    /**
     *  The hasItem() method shall return TRUE if the list has an item
     *  associated with the given $index, FALSE otherwise.
     *
     *  @param  int     $index
     *
     *  @return bool
     */
    public function hasItem($index);
}


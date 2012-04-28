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
 *  Definition of the Lousson\XML\Dialect\AnyNamedComponent interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *  @copyright  2012 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\XML\Dialect\AnyComponent;

/**
 *  The Lousson\XML\Dialect\AnyNamedComponent interface declares an API
 *  for representations of named XML dialect components.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 */
interface AnyNamedComponent extends AnyComponent
{
    /**
     *  The getName() method shall return the local name of the component
     *  within it's target namespace.
     *
     *  @return string
     */
    public function getName();

    /**
     *  The getTargetNamespace() method shall return the URI of the
     *  namespace the component has been specified for - or NULL, if no
     *  such URI has been defined.
     *
     *  @return string
     */
    public function getTargetNamespace();
}


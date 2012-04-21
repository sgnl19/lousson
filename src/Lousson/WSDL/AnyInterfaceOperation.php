<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 textwidth=75: *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Copyright (c) 2011 Mathias J. Hennig                                  *
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
namespace Lousson\WSDL;

/**
 *  Definition of the Lousson\WSDL\AnyInterfaceOperation interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *  @copyright  2011 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\WSDL\AnyComponent;

/**
 *  The Lousson\WSDL\AnyInterfaceOperation interface declares the API
 *  required in order to represent WSDL interface operation components.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *
 *  @see http://www.w3.org/TR/wsdl20/#InterfaceOperation
 *  @see http://www.w3.org/TR/wsdl20/#component_model
 */
interface AnyInterfaceOperation extends AnyComponent
{
    const PATTERN_IN_ONLY = "http://www.w3.org/ns/wsdl/in-only";
    const PATTERN_ROBUST_IN_ONLY = "http://www.w3.org/ns/wsdl/robust-in-only";
    const PATTERN_IN_OUT = "http://www.w3.org/ns/wsdl/in-out";

    function getName();
    function getMessageExchangePattern();
    function getInterfaceMessageReferences();
    function getInterfaceFaultReferences();
    function getStyle();
    function getParent();
}


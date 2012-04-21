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
namespace Lousson\Schema;

/**
 *  Definition of the Lousson\Schema\AnyTypeDefinition interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *  @copyright  2011 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\Schema\AnyComponent;

/**
 *  The Lousson\Schema\AnyTypeDefinition interface declares the shared
 *  parts of the APIs required in order to implement simple and complex
 *  type definitions, according to the W3C XMLSchema Recommendation.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *
 *  @see http://www.w3.org/TR/xmlschema-1/#Simple_Type_Definitions
 *  @see http://www.w3.org/TR/xmlschema-1/#Complex_Type_Definitions
 */
interface AnyTypeDefinition extends AnyComponent
{
    /**
     *  @return string
     */
    function getName();

    /**
     *  @return string
     */
    function getTargetNamespace();
}

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
 *  Definition of the Lousson\Schema\AnyConstrainingFacet interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *  @copyright  2011 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\Schema\AnyComponent;

/**
 *  The Lousson\Schema\AnyConstrainingFacet interface declares the API
 *  required in order to implement Schema constraining facet components.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *
 *  @see http://www.w3.org/TR/xmlschema-2/#rf-defn
 *  @see http://www.w3.org/TR/xmlschema-2/#rf-facets
 */
interface AnyConstrainingFacet extends AnyComponent
{
    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-length
     *  @var string
     */
    const TYPE_LENGTH = "length";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-minLength
     *  @var string
     */
    const TYPE_MIN_LENGTH = "minLength";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-maxLength
     *  @var string
     */
    const TYPE_MAX_LENGTH = "maxLength";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-pattern
     *  @var string
     */
    const TYPE_PATTERN = "pattern";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-enumeration
     *  @var string
     */
    const TYPE_ENUMERATION = "enumeration";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-whiteSpace
     *  @var string
     */
    const TYPE_WHITE_SPACE = "whiteSpace";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-maxInclusive
     *  @var string
     */
    const TYPE_MAX_INCLUSIVE = "maxInclusive";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-maxExclusive
     *  @var string
     */
    const TYPE_MAX_EXCLUSIVE = "maxExclusive";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-minExclusive
     *  @var string
     */
    const TYPE_MIN_EXCLUSIVE = "minExclusive";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-minInclusive
     *  @var string
     */
    const TYPE_MIN_INCLUSIVE = "minInclusive";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-totalDigits
     *  @var string
     */
    const TYPE_TOTAL_DIGITS = "totalDigits";

    /**
     *  @see http://www.w3.org/TR/xmlschema-2/#rf-fractionDigits
     *  @var string
     */
    const TYPE_FRACTION_DIGITS = "fractionDigits";

    /**
     *  @return string
     */
    function getType();

    /**
     *  @return string
     */
    function getValue();

    /**
     *  @return bool
     */
    function isFixed();

    /**
     *  @return Lousson\Schema\AnyAnnotation
     */
    function getAnnotation();
}


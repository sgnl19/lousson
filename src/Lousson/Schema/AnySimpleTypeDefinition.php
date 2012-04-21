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
 *  Definition of the Lousson\Schema\AnySimpleTypeDefinition interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *  @copyright  2011 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\Schema\AnyTypeDefinition;

/**
 *  The Lousson\Schema\AnySimpleTypeDefinition interface declares the
 *  API required in order to implement Schema simple type definition
 *  components.
 *
 *  @package    org.lousson.wsdl
 *  @since      December 2011
 *
 *  @see http://www.w3.org/TR/xmlschema-1/#Simple_Type_Definitions
 *  @see http://www.w3.org/TR/xmlschema-1/#components
 */
interface AnySimpleTypeDefinition extends AnyTypeDefinition
{
    /**
     *  @var int
     */
    const FINAL_EXTENSION = 0x01;

    /**
     *  @var int
     */
    const FINAL_RESTRICTION = 0x02;

    /**
     *  @var int
     */
    const FINAL_LIST = 0x04;

    /**
     *  @var int
     */
    const FINAL_UNION = 0x08;

    /**
     *  @var string
     */
    const VARIETY_ATOMIC = "atomic";

    /**
     *  @var string
     */
    const VARIETY_LIST = "list";

    /**
     *  @var string
     */
    const VARIETY_UNION = "union";

    /**
     *  @var string
     */
    const FACET_ORDERED = "ordered";

    /**
     *  @var string
     */
    const FACET_BOUNDED = "bounded";

    /**
     *  @var string
     */
    const FACET_CARDINALITY = "cardinality";

    /**
     *  @var string
     */
    const FACET_NUMERIC = "numeric";

    /**
     *  @var string
     */
    const ORDERED_FALSE = "false";

    /**
     *  @var string
     */
    const ORDERED_TRUE = "true";

    /**
     *  @var string
     */
    const ORDERED_PARTIAL = "partial";

    /**
     *  @var string
     */
    const ORDERED_TOTAL = "total";

    /**
     *  @var string
     */
    const BOUNDED_FALSE = "false";

    /**
     *  @var string
     */
    const BOUNDED_TRUE = "true";

    /**
     *  @var string
     */
    const CARDINALITY_COUNTABLY_INFINITE = "countably infinite";

    /**
     *  @var string
     */
    const CARDINALITY_FINITE = "finite";

    /**
     *  @var string
     */
    const NUMERIC_FALSE = "false";

    /**
     *  @var string
     */
    const NUMERIC_TRUE = "true";

    /**
     *  @var string
     */
    const CONSTRAINT_LENGTH = "length";

    /**
     *  @var string
     */
    const CONSTRAINT_MIN_LENGTH = "minLength";

    /**
     *  @var string
     */
    const CONSTRAINT_MAX_LENGTH = "maxLength";

    /**
     *  @var string
     */
    const CONSTRAINT_PATTERN = "pattern";

    /**
     *  @var string
     */
    const CONSTRAINT_ENUMERATION = "enumeration";

    /**
     *  @var string
     */
    const CONSTRAINT_WHITE_SPACE = "whiteSpace";

    /**
     *  @var string
     */
    const CONSTRAINT_MAX_INCLUSIVE = "maxInclusive";

    /**
     *  @var string
     */
    const CONSTRAINT_MAX_EXCLUSIVE = "maxExclusive";

    /**
     *  @var string
     */
    const CONSTRAINT_MIN_EXCLUSIVE = "minExclusive";

    /**
     *  @var string
     */
    const CONSTRAINT_MIN_INCLUSIVE = "minInclusive";

    /**
     *  @var string
     */
    const CONSTRAINT_TOTAL_DIGITS = "totalDigits";

    /**
     *  @var string
     */
    const CONSTRAINT_FRACTION_DIGITS = "fractionDigits";

    /**
     *  @return Lousson\Schema\AnySimpleTypeDefinition
     */
    function getBaseTypeDefinition();

    /**
     *  @return Traversable
     */
    function getFacets();

    /**
     *  @return Traversable
     */
    function getFundamentalFacets();

    /**
     *  @return Traversable
     */
    function getFinal();

    /**
     *  @return string
     */
    function getVariety();

    /**
     *  @return Lousson\Schema\AnySimpleTypeDefinition
     */
    function getPrimitiveTypeDefinition();

    /**
     *  @return Lousson\Schema\AnySimpleTypeDefinition
     */
    function getItemTypeDefinition();

    /**
     *  @return Traversable
     */
    function getMemberTypeDefinitions();

    /**
     *  @return Lousson\Schema\AnyAnnotation
     */
    function getAnnotation();
}


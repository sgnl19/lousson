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
 *  Definition of the Lousson\Schema\AnyElementDeclaration interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *  @copyright  2011 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\Schema\AnyComponent;

/**
 *  The Lousson\Schema\DOMElementDeclaration interface declares the API
 *  required in order to implement Schema element declaration components.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *
 *  @see http://www.w3.org/TR/xmlschema-1/#cElement_Declarations
 *  @see http://www.w3.org/TR/xmlschema-1/#components
 */
interface AnyElementDeclaration extends AnyComponent
{
    /**
     *  @var string
     */
    const VALUE_DEFAULT = "default";

    /**
     *  @var string
     */
    const VALUE_FIXED = "fixed";

    /**
     *  @var string
     */
    const SUBSTITUTION_GENERAL = "substitution";

    /**
     *  @var string
     */
    const SUBSTITUTION_RESTRICTION = "restriction";

    /**
     *  @var string
     */
    const SUBSTITUTION_EXTENSION = "extension";

    /**
     *  @return string
     */
    function getName();

    /**
     *  @return string
     */
    function getTargetNamespace();

    /**
     *  @return Lousson\Schema\AnyTypeDefinition
     */
    function getTypeDefinition();

    /**
     *  @return Lousson\Schema\AnyComplexTypeDefinition
     */
    function getScope();

    /**
     *  @return string
     */
    function getValueConstraint(&$type = null);

    /**
     *  @return bool
     *
     *  @see http://www.w3.org/TR/xmlschema-1/#xsi_nil
     *  @see http://www.w3.org/TR/xmlschema-1/#nillable
     */
    function isNillable();

    /**
     *  @return Traversable
     */
    function getIdentityConstraintDefinitions();

    /**
     *  @return Lousson\Schema\AnyElementDeclaration
     */
    function getSubstitutionGroupAffiliation();

    /**
     *  @return Traversable
     */
    function getSubstitutionGroupExclusions();

    /**
     *  @return Traversable
     */
    function getDisallowedSubstitutions();

    /**
     *  @return bool
     */
    function isAbstract();

    /**
     *  @return Lousson\Schema\AnyAnnotation
     */
    function getAnnotation();
}


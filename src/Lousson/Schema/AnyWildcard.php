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
 *  Definition of the Lousson\Schema\AnyWildcard interface.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *  @copyright  2011 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */
use Lousson\Schema\AnyComponent;

/**
 *  The Lousson\Schema\AnyWildcard interface declares the API required in
 *  order to implement Schema wildcard components.
 *
 *  @package    org.lousson.wsdl
 *  @since      Release 0.0.1
 *
 *  @see http://www.w3.org/TR/xmlschema-1/#Wildcards
 *  @see http://www.w3.org/TR/xmlschema-1/#components
 */
interface AnyWildcard extends AnyComponent
{
    /**
     *  @var string
     */
    const NS_CONSTRAINT_ANY = "##any";

    /**
     *  @var string
     */
    const NS_CONSTRAINT_OTHER = "##other";

    /**
     *  @var string
     */
    const NS_CONSTRAINT_TARGET_NAMESPACE = "##targetNamespace";

    /**
     *  @var string
     */
    const NS_CONSTRAINT_LOCAL = "##local";

    /**
     *  @var string
     */
    const PROCESS_CONTENTS_SKIP = "skip";

    /**
     *  @var string
     */
    const PROCESS_CONTENTS_STRICT = "strict";

    /**
     *  @var string
     */
    const PROCESS_CONTENTS_LAX = "lax";

    /**
     *  @param  string  $type
     *  @return array
     */
    function getNamespaceConstraint(&$type = null);

    /**
     *  @return string
     */
    function getProcessContents();

    /**
     *  @return Lousson\Schema\AnyAnnotation
     */
    function getAnnotation();
}


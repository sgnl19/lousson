<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 textwidth=75: *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Copyright (c) 2011, 2012 Mathias J. Hennig                            *
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
namespace Lousson\Util;

/**
 *  Definition of the Lousson\Util\AutoLoader class.
 *
 *  @package    org.lousson.util
 *  @since      September 2011
 *  @copyright  2011, 2012 Mathias J. Hennig
 *  @license    http://www.opensource.org/licenses/ISC ISC License
 *  @author     Mathias J. Hennig <mhennig at quirkies.org>
 */

/**
 *  The Lousson\Util\AutoLoader class is destined for use as callback
 *  within the SPL autoload mechanism, but might get used also to manually
 *  load class definitions and/or as base class of custom loaders.
 *
 *  @package    org.lousson.util
 *  @since      September 2011
 *
 *  @see http://php.net/manual/en/function.spl-autoload-register.php
 *  @see http://php.net/manual/en/book.spl.php
 */
class AutoLoader
{
    /**
     *  The getInstance() method returns an instance of the AutoLoader
     *  class. Authors of derived classes should reimplement it, in order
     *  to avoid confusion.
	 *
	 *	@return Lousson\Util\AutoLoader
     */
    static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     *  The loadClass() method tries to include the file where the class
     *  identified by the given $className should be defined in, according
     *  to the path returned by getClassPath().
     *
     *  @param  string  $className
     *  @return bool
     */
    public function loadClass($className)
    {
        $classPath = $this->getClassPath($className);
        return include_once($classPath);
    }

    /**
     *  The getClassPath() returns the path to the file where the class
     *  identified by the given $className should be defined. By default,
     *  this path is assembled by treating namespaces as directory names
     *  and class names as file names, in conjunction with the ".php" file
     *  extension.
     *
     *  Note that, if the underlying filesystem is case-sensitive, this
     *  method will require the $className to be the exact counterpart of
     *  the class path!
     *
     *  @param  string  $className
     *  @return string
     */
    public function getClassPath($className)
    {
        $className = ltrim($className, "\\");
        $classPath = str_replace("\\", DIRECTORY_SEPARATOR, $className);

        return "{$classPath}.php";
    }

    /**
     *  The "magic" method __invoke() is an alias for loadClass().
     .  It allows the instances of Lousson\Util\AutoLoader to be used as
     *  callbacks directly, which might be more intuitive.
     *
     *  @param  string  $className
     *  @return bool
     *
     *  @see http://de.php.net/manual/en/language.oop5.magic.php
     */
    public function __invoke($className)
    {
        return $this->loadClass($className);
    }

    /**
     *  AutoLoader::$instance is a cache for the object created by
     *  getInstance().
     *
     *  @var Lousson\Util\AutoLoader
     */
    private static $instance;
}


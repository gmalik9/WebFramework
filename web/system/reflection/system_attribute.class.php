<?php
/**
 * Scavix Web Development Framework
 *
 * Copyright (c) 2007-2012 PamConsult GmbH
 *
 * This library is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General
 * Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any
 * later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library. If not, see <http://www.gnu.org/licenses/>
 *
 * @author PamConsult GmbH http://www.pamconsult.com <info@pamconsult.com>
 * @copyright 2007-2012 PamConsult GmbH
 * @license http://www.opensource.org/licenses/lgpl-license.php LGPL
 */

/**
 * Base class for WDF annotation implementation.
 * 
 * All attributes must inherit this class and can the be noted as attributes to classes and/or methods like this:
 * <at>attribute[classname(constructor arguments)]
 * - note that an argument class is named MyFirstAttribute the classname may be MyFirst or MyFirstAttribute
 * - note that the part in the brackets[] will be eval'd, so stay in PHP syntax in there.
 * - note that you may leave out the brackets () if there are not required constructor arguments in your attribute
 * sample
 * <at>attribute[MyFirst('bla')]
 * <at>attribute[MyFirstAttribute()]
 * <at>attribute[MyFirst]
 * 
 * Some more samples can be found at <System_Reflector::GetClassAttributes>
 */
class System_Attribute
{
	var $Reflector = null;
	var $Class = null;
	var $Object = null;
	var $Method = null;
	var $Field = null;
	function __construct() {}
}
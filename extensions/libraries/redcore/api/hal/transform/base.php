<?php
/**
 * @package     Redcore
 * @subpackage  Api
 *
 * @copyright   Copyright (C) 2008 - 2020 redWEB.dk. All rights reserved.
 * @license     GNU General Public License version 2 or later, see LICENSE.
 */

defined('JPATH_BASE') or die;

/**
 * Interface to transform api output
 *
 * @package     Redcore
 * @subpackage  Api
 * @since       1.2
 */
abstract class RApiHalTransformBase implements RApiHalTransformInterface
{
	/**
	 * Method to transform an internal representation to an external one.
	 *
	 * @param   string  $definition  Field definition.
	 *
	 * @return string Transformed value.
	 */
	public static function toExternal($definition)
	{
		return $definition;
	}

	/**
	 * Method to transform an external representation to an internal one.
	 *
	 * @param   string  $definition  Field definition.
	 *
	 * @return string Transformed value.
	 */
	public static function toInternal($definition)
	{
		return $definition;
	}
}

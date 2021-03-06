<?php
/**
*	This file contains the Statuses Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Statuses Enum Class
*
*	Class for the different statuses.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Statuses extends ValuesBase {

	const Available = 1;
	const SSTC = 2;
	const SSTCM = 3;
	const UnderOffer = 4;
	const Reserved = 5;
	const LetAgreed = 6;
}
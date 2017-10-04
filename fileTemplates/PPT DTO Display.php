<?php namespace AdDisplay\Import\DisplayAd;

use AdDisplay\Ad\Ad;

class ${NAME} extends Base
{
	const URL_TYPE_QUERY = 'doubleclick.net';
	const IMAGE_TYPE_QUERY = null;

	/**
	 * @return int
	 */
	public static function getType() {
		return Ad::TYPE_DISPLAY_DOUBLECLICK;
	}

	/**
	 * @return bool
	 */
	public function hasQueryUrl() {
		return TRUE;
	}

	/**
	 * @return bool
	 */
	public function hasQueryImage() {
		return FALSE;
	}
}

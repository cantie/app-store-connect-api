<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Cantie\AppStoreConnect\Services\AppStore;

class AppStoreVersionPhasedRelease_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $phasedReleaseStateType = PhasedReleaseState::class;
	protected $phasedReleaseStateDataType = '';
	public $startDate;
	public $totalPauseDuration;
	public $currentDayNumber;

	/**
	* @return  PhasedReleaseState
	*/
	public function getPhasedReleaseState()
	{
		return $this->phasedReleaseState;
	}
	/**
	* @param  PhasedReleaseState
	*/
	public function setPhasedReleaseState($phasedReleaseState)
	{
		$this->phasedReleaseState = $phasedReleaseState;
		return $phasedReleaseState;
	}
	public function getStartDate()
	{
		return $this->startDate;
	}
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $startDate;
	}
	public function getTotalPauseDuration()
	{
		return $this->totalPauseDuration;
	}
	public function setTotalPauseDuration($totalPauseDuration)
	{
		$this->totalPauseDuration = $totalPauseDuration;
		return $totalPauseDuration;
	}
	public function getCurrentDayNumber()
	{
		return $this->currentDayNumber;
	}
	public function setCurrentDayNumber($currentDayNumber)
	{
		$this->currentDayNumber = $currentDayNumber;
		return $currentDayNumber;
	}

}
class_alias(AppStoreVersionPhasedRelease_Attributes::class, 'AppleService_AppStore_AppStoreVersionPhasedRelease_Attributes');

class AppStoreVersionPhasedRelease extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersionPhasedReleases';
	public $id;
	protected $attributesType = AppStoreVersionPhasedRelease_Attributes::class;
	protected $attributesDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  AppStoreVersionPhasedRelease_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppStoreVersionPhasedRelease_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}

}
class_alias(AppStoreVersionPhasedRelease::class, 'AppleService_AppStore_AppStoreVersionPhasedRelease');


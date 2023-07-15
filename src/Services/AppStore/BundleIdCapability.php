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

class BundleIdCapability_Attributes extends \Cantie\AppStoreConnect\Model
{
	protected $capabilityTypeType = CapabilityType::class;
	protected $capabilityTypeDataType = '';
	protected $settingsType = CapabilitySetting::class;
	protected $settingsDataType = 'array';

	/**
	* @return  CapabilityType
	*/
	public function getCapabilityType()
	{
		return $this->capabilityType;
	}
	/**
	* @param  CapabilityType
	*/
	public function setCapabilityType($capabilityType)
	{
		$this->capabilityType = $capabilityType;
		return $capabilityType;
	}
	/**
	* @return  CapabilitySetting[]
	*/
	public function getSettings()
	{
		return $this->settings;
	}
	/**
	* @param  CapabilitySetting[]
	*/
	public function setSettings($settings)
	{
		$this->settings = $settings;
		return $settings;
	}

}
class_alias(BundleIdCapability_Attributes::class, 'AppleService_AppStore_BundleIdCapability_Attributes');

class BundleIdCapability extends \Cantie\AppStoreConnect\Model
{
	public $type = 'bundleIdCapabilities';
	public $id;
	protected $attributesType = BundleIdCapability_Attributes::class;
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
	* @return  BundleIdCapability_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BundleIdCapability_Attributes
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
class_alias(BundleIdCapability::class, 'AppleService_AppStore_BundleIdCapability');


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

class AppPricePoint_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $customerPrice;
	public $proceeds;

	public function getCustomerPrice()
	{
		return $this->customerPrice;
	}
	public function setCustomerPrice($customerPrice)
	{
		$this->customerPrice = $customerPrice;
		return $customerPrice;
	}
	public function getProceeds()
	{
		return $this->proceeds;
	}
	public function setProceeds($proceeds)
	{
		$this->proceeds = $proceeds;
		return $proceeds;
	}

}
class_alias(AppPricePoint_Attributes::class, 'AppleService_AppStore_AppPricePoint_Attributes');

class AppPricePoint_Relationships_PriceTier_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(AppPricePoint_Relationships_PriceTier_Links::class, 'AppleService_AppStore_AppPricePoint_Relationships_PriceTier_Links');

class AppPricePoint_Relationships_PriceTier_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPriceTiers';
	public $id;

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

}
class_alias(AppPricePoint_Relationships_PriceTier_Data::class, 'AppleService_AppStore_AppPricePoint_Relationships_PriceTier_Data');

class AppPricePoint_Relationships_PriceTier extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPricePoint_Relationships_PriceTier_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPricePoint_Relationships_PriceTier_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPricePoint_Relationships_PriceTier_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPricePoint_Relationships_PriceTier_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppPricePoint_Relationships_PriceTier_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPricePoint_Relationships_PriceTier_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPricePoint_Relationships_PriceTier::class, 'AppleService_AppStore_AppPricePoint_Relationships_PriceTier');

class AppPricePoint_Relationships_Territory_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $self;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $related;
	}

}
class_alias(AppPricePoint_Relationships_Territory_Links::class, 'AppleService_AppStore_AppPricePoint_Relationships_Territory_Links');

class AppPricePoint_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'territories';
	public $id;

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

}
class_alias(AppPricePoint_Relationships_Territory_Data::class, 'AppleService_AppStore_AppPricePoint_Relationships_Territory_Data');

class AppPricePoint_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppPricePoint_Relationships_Territory_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppPricePoint_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppPricePoint_Relationships_Territory_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppPricePoint_Relationships_Territory_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  AppPricePoint_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppPricePoint_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AppPricePoint_Relationships_Territory::class, 'AppleService_AppStore_AppPricePoint_Relationships_Territory');

class AppPricePoint_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $priceTierType = AppPricePoint_Relationships_PriceTier::class;
	protected $priceTierDataType = 'object';
	protected $territoryType = AppPricePoint_Relationships_Territory::class;
	protected $territoryDataType = 'object';

	/**
	* @return  AppPricePoint_Relationships_PriceTier
	*/
	public function getPriceTier()
	{
		return $this->priceTier;
	}
	/**
	* @param  AppPricePoint_Relationships_PriceTier
	*/
	public function setPriceTier($priceTier)
	{
		$this->priceTier = $priceTier;
		return $priceTier;
	}
	/**
	* @return  AppPricePoint_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  AppPricePoint_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $territory;
	}

}
class_alias(AppPricePoint_Relationships::class, 'AppleService_AppStore_AppPricePoint_Relationships');

class AppPricePoint extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appPricePoints';
	public $id;
	protected $attributesType = AppPricePoint_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppPricePoint_Relationships::class;
	protected $relationshipsDataType = 'object';
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
	* @return  AppPricePoint_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppPricePoint_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  AppPricePoint_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppPricePoint_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
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
class_alias(AppPricePoint::class, 'AppleService_AppStore_AppPricePoint');


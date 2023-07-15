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

class SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory_Data extends \Cantie\AppStoreConnect\Model
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
class_alias(SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory_Data');

class SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory::class, 'AppleService_AppStore_SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory');

class SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPricePoints';
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
class_alias(SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint_Data::class, 'AppleService_AppStore_SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint_Data');

class SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint::class, 'AppleService_AppStore_SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint');

class SubscriptionPromotionalOfferPriceInlineCreate_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $territoryType = SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory::class;
	protected $territoryDataType = 'object';
	protected $subscriptionPricePointType = SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint::class;
	protected $subscriptionPricePointDataType = 'object';

	/**
	* @return  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_Territory
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $territory;
	}
	/**
	* @return  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint
	*/
	public function getSubscriptionPricePoint()
	{
		return $this->subscriptionPricePoint;
	}
	/**
	* @param  SubscriptionPromotionalOfferPriceInlineCreate_Relationships_SubscriptionPricePoint
	*/
	public function setSubscriptionPricePoint($subscriptionPricePoint)
	{
		$this->subscriptionPricePoint = $subscriptionPricePoint;
		return $subscriptionPricePoint;
	}

}
class_alias(SubscriptionPromotionalOfferPriceInlineCreate_Relationships::class, 'AppleService_AppStore_SubscriptionPromotionalOfferPriceInlineCreate_Relationships');

class SubscriptionPromotionalOfferPriceInlineCreate extends \Cantie\AppStoreConnect\Model
{
	public $type = 'subscriptionPromotionalOfferPrices';
	public $id;
	protected $relationshipsType = SubscriptionPromotionalOfferPriceInlineCreate_Relationships::class;
	protected $relationshipsDataType = 'object';

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
	* @return  SubscriptionPromotionalOfferPriceInlineCreate_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  SubscriptionPromotionalOfferPriceInlineCreate_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(SubscriptionPromotionalOfferPriceInlineCreate::class, 'AppleService_AppStore_SubscriptionPromotionalOfferPriceInlineCreate');


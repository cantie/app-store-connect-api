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

class PromotedPurchaseImageCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $fileSize;
	public $fileName;

	public function getFileSize()
	{
		return $this->fileSize;
	}
	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		return $fileSize;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $fileName;
	}

}
class_alias(PromotedPurchaseImageCreateRequest_Data_Attributes::class, 'AppleService_AppStore_PromotedPurchaseImageCreateRequest_Data_Attributes');

class PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchases';
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
class_alias(PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase_Data::class, 'AppleService_AppStore_PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase_Data');

class PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase::class, 'AppleService_AppStore_PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase');

class PromotedPurchaseImageCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $promotedPurchaseType = PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase::class;
	protected $promotedPurchaseDataType = 'object';

	/**
	* @return  PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase
	*/
	public function getPromotedPurchase()
	{
		return $this->promotedPurchase;
	}
	/**
	* @param  PromotedPurchaseImageCreateRequest_Data_Relationships_PromotedPurchase
	*/
	public function setPromotedPurchase($promotedPurchase)
	{
		$this->promotedPurchase = $promotedPurchase;
		return $promotedPurchase;
	}

}
class_alias(PromotedPurchaseImageCreateRequest_Data_Relationships::class, 'AppleService_AppStore_PromotedPurchaseImageCreateRequest_Data_Relationships');

class PromotedPurchaseImageCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'promotedPurchaseImages';
	protected $attributesType = PromotedPurchaseImageCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = PromotedPurchaseImageCreateRequest_Data_Relationships::class;
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
	/**
	* @return  PromotedPurchaseImageCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  PromotedPurchaseImageCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  PromotedPurchaseImageCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  PromotedPurchaseImageCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $relationships;
	}

}
class_alias(PromotedPurchaseImageCreateRequest_Data::class, 'AppleService_AppStore_PromotedPurchaseImageCreateRequest_Data');

class PromotedPurchaseImageCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = PromotedPurchaseImageCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  PromotedPurchaseImageCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  PromotedPurchaseImageCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(PromotedPurchaseImageCreateRequest::class, 'AppleService_AppStore_PromotedPurchaseImageCreateRequest');


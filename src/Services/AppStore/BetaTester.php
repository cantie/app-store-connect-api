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

class BetaTester_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $firstName;
	public $lastName;
	public $email;
	protected $inviteTypeType = BetaInviteType::class;
	protected $inviteTypeDataType = '';

	public function getFirstName()
	{
		return $this->firstName;
	}
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $firstName;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
		return $lastName;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $email;
	}
	/**
	* @return  BetaInviteType
	*/
	public function getInviteType()
	{
		return $this->inviteType;
	}
	/**
	* @param  BetaInviteType
	*/
	public function setInviteType($inviteType)
	{
		$this->inviteType = $inviteType;
		return $inviteType;
	}

}
class_alias(BetaTester_Attributes::class, 'AppleService_AppStore_BetaTester_Attributes');

class BetaTester_Relationships_Apps_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaTester_Relationships_Apps_Links::class, 'AppleService_AppStore_BetaTester_Relationships_Apps_Links');

class BetaTester_Relationships_Apps_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
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
class_alias(BetaTester_Relationships_Apps_Data::class, 'AppleService_AppStore_BetaTester_Relationships_Apps_Data');

class BetaTester_Relationships_Apps extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaTester_Relationships_Apps_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BetaTester_Relationships_Apps_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaTester_Relationships_Apps_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaTester_Relationships_Apps_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $meta;
	}
	/**
	* @return  BetaTester_Relationships_Apps_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTester_Relationships_Apps_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaTester_Relationships_Apps::class, 'AppleService_AppStore_BetaTester_Relationships_Apps');

class BetaTester_Relationships_BetaGroups_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaTester_Relationships_BetaGroups_Links::class, 'AppleService_AppStore_BetaTester_Relationships_BetaGroups_Links');

class BetaTester_Relationships_BetaGroups_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaGroups';
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
class_alias(BetaTester_Relationships_BetaGroups_Data::class, 'AppleService_AppStore_BetaTester_Relationships_BetaGroups_Data');

class BetaTester_Relationships_BetaGroups extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaTester_Relationships_BetaGroups_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BetaTester_Relationships_BetaGroups_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaTester_Relationships_BetaGroups_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaTester_Relationships_BetaGroups_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $meta;
	}
	/**
	* @return  BetaTester_Relationships_BetaGroups_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTester_Relationships_BetaGroups_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaTester_Relationships_BetaGroups::class, 'AppleService_AppStore_BetaTester_Relationships_BetaGroups');

class BetaTester_Relationships_Builds_Links extends \Cantie\AppStoreConnect\Model
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
class_alias(BetaTester_Relationships_Builds_Links::class, 'AppleService_AppStore_BetaTester_Relationships_Builds_Links');

class BetaTester_Relationships_Builds_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
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
class_alias(BetaTester_Relationships_Builds_Data::class, 'AppleService_AppStore_BetaTester_Relationships_Builds_Data');

class BetaTester_Relationships_Builds extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = BetaTester_Relationships_Builds_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = BetaTester_Relationships_Builds_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  BetaTester_Relationships_Builds_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  BetaTester_Relationships_Builds_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $links;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $meta;
	}
	/**
	* @return  BetaTester_Relationships_Builds_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  BetaTester_Relationships_Builds_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(BetaTester_Relationships_Builds::class, 'AppleService_AppStore_BetaTester_Relationships_Builds');

class BetaTester_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appsType = BetaTester_Relationships_Apps::class;
	protected $appsDataType = 'object';
	protected $betaGroupsType = BetaTester_Relationships_BetaGroups::class;
	protected $betaGroupsDataType = 'object';
	protected $buildsType = BetaTester_Relationships_Builds::class;
	protected $buildsDataType = 'object';

	/**
	* @return  BetaTester_Relationships_Apps
	*/
	public function getApps()
	{
		return $this->apps;
	}
	/**
	* @param  BetaTester_Relationships_Apps
	*/
	public function setApps($apps)
	{
		$this->apps = $apps;
		return $apps;
	}
	/**
	* @return  BetaTester_Relationships_BetaGroups
	*/
	public function getBetaGroups()
	{
		return $this->betaGroups;
	}
	/**
	* @param  BetaTester_Relationships_BetaGroups
	*/
	public function setBetaGroups($betaGroups)
	{
		$this->betaGroups = $betaGroups;
		return $betaGroups;
	}
	/**
	* @return  BetaTester_Relationships_Builds
	*/
	public function getBuilds()
	{
		return $this->builds;
	}
	/**
	* @param  BetaTester_Relationships_Builds
	*/
	public function setBuilds($builds)
	{
		$this->builds = $builds;
		return $builds;
	}

}
class_alias(BetaTester_Relationships::class, 'AppleService_AppStore_BetaTester_Relationships');

class BetaTester extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaTesters';
	public $id;
	protected $attributesType = BetaTester_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = BetaTester_Relationships::class;
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
	* @return  BetaTester_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  BetaTester_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}
	/**
	* @return  BetaTester_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  BetaTester_Relationships
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
class_alias(BetaTester::class, 'AppleService_AppStore_BetaTester');


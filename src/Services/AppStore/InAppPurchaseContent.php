<?php

namespace Cantie\AppStoreConnect\Services\AppStore;

class InAppPurchaseContent_Relationships_InAppPurchaseV2_Data extends \Cantie\AppStoreConnect\Model
{
    public $id;
    public $type;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

class InAppPurchaseContent_Relationships_InAppPurchaseV2_Links extends \Cantie\AppStoreConnect\Model
{
    public $related;
    public $self;

    public function getRelated()
    {
        return $this->related;
    }
    public function seRelated($related)
    {
        $this->related = $related;
        return $this;
    }
    public function getSelf()
    {
        return $this->self;
    }
    public function setSelf($self)
    {
        $this->self = $self;
        return $this;
    }
}

class InAppPurchaseContent_Relationships_InAppPurchaseV2 extends \Cantie\AppStoreConnect\Model
{
    protected $dataType = InAppPurchaseContent_Relationships_InAppPurchaseV2_Data::class;
    protected $dataDataType = '';

    protected $linksType = InAppPurchaseContent_Relationships_InAppPurchaseV2_Links::class;
    protected $linksDataType = '';

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    public function getLinks()
    {
        return $this->links;
    }
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
}

class InAppPurchaseContent_Relationships extends \Cantie\AppStoreConnect\Model
{
    protected $inAppPurchaseV2Type = InAppPurchaseContent_Relationships_InAppPurchaseV2::class;
    protected $inAppPurchaseV2DataType = '';

    /**
     * Get the value of territory
     */ 
    public function getInAppPurchaseV2()
    {
        return $this->inAppPurchaseV2;
    }

    /**
     * Set the value of territory
     *
     * @return  self
     */ 
    public function setInAppPurchaseV2($inAppPurchaseV2)
    {
        $this->inAppPurchaseV2 = $inAppPurchaseV2;

        return $this;
    }
}

class InAppPurchaseContent_Attributes extends \Cantie\AppStoreConnect\Model
{
    public $fileName;
    public $fileSize;
    public $lastModifiedDate;
    public $url;

    /**
     * Get the value of fileName
     */ 
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set the value of fileName
     *
     * @return  self
     */ 
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get the value of fileSize
     */ 
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set the value of fileSize
     *
     * @return  self
     */ 
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get the value of lastModifiedDate
     */ 
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Set the value of lastModifiedDate
     *
     * @return  self
     */ 
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}

class InAppPurchaseContent extends \Cantie\AppStoreConnect\Model
{
    protected $attributesType = InAppPurchaseContent_Attributes::class;
    protected $attributesDataType = '';
    protected $relationshipsType = InAppPurchaseContent_Relationships::class;
    protected $relationshipsDataType = '';
    protected $linksType = ResourceLinks::class;
    protected $linksDataType = '';

    public $id;
    public $type; // = 'inAppPurchaseContents'

    /**
     * Get the value of attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set the value of attributes
     *
     * @return  self
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of relationships
     */
    public function getRelationships()
    {
        return $this->relationships;
    }

    /**
     * Set the value of relationships
     *
     * @return  self
     */
    public function setRelationships($relationships)
    {
        $this->relationships = $relationships;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of links
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set the value of links
     *
     * @return  self
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

}

class_alias(InAppPurchaseContent::class, 'AppleService_AppStore_InAppPurchaseContent');
class_alias(InAppPurchaseContent_Attributes::class, 'AppleService_AppStore_InAppPurchaseContent_Attributes');
class_alias(InAppPurchaseContent_Relationships::class, 'AppleService_AppStore_InAppPurchaseContent_Relationships');

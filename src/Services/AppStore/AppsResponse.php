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

class AppsResponse extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = App::class;
	protected $dataDataType = 'array';
	protected $includedType = [AppEncryptionDeclaration::class, CiProduct::class, BetaGroup::class, AppStoreVersion::class, PrereleaseVersion::class, BetaAppLocalization::class, Build::class, BetaLicenseAgreement::class, BetaAppReviewDetail::class, AppInfo::class, AppClip::class, EndUserLicenseAgreement::class, AppPreOrder::class, InAppPurchase::class, SubscriptionGroup::class, GameCenterEnabledVersion::class, AppCustomProductPage::class, InAppPurchaseV2::class, PromotedPurchase::class, AppEvent::class, ReviewSubmission::class, SubscriptionGracePeriod::class, GameCenterDetail::class, AppStoreVersionExperimentV2::class];
	protected $includedDataType = 'array[*]';
	protected $linksType = PagedDocumentLinks::class;
	protected $linksDataType = '';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';

	/**
	* @return  App[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  App[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	public function getIncluded()
	{
		return $this->included;
	}
	public function setIncluded($included)
	{
		$this->included = $included;
		return $this;
	}
	/**
	* @return  PagedDocumentLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PagedDocumentLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
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
		return $this;
	}

}


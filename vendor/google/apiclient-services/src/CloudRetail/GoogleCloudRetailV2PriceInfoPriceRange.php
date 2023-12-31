<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudRetail;

class GoogleCloudRetailV2PriceInfoPriceRange extends \Google\Model
{
  /**
   * @var GoogleCloudRetailV2Interval
   */
  public $originalPrice;
  protected $originalPriceType = GoogleCloudRetailV2Interval::class;
  protected $originalPriceDataType = '';
  /**
   * @var GoogleCloudRetailV2Interval
   */
  public $price;
  protected $priceType = GoogleCloudRetailV2Interval::class;
  protected $priceDataType = '';

  /**
   * @param GoogleCloudRetailV2Interval
   */
  public function setOriginalPrice(GoogleCloudRetailV2Interval $originalPrice)
  {
    $this->originalPrice = $originalPrice;
  }
  /**
   * @return GoogleCloudRetailV2Interval
   */
  public function getOriginalPrice()
  {
    return $this->originalPrice;
  }
  /**
   * @param GoogleCloudRetailV2Interval
   */
  public function setPrice(GoogleCloudRetailV2Interval $price)
  {
    $this->price = $price;
  }
  /**
   * @return GoogleCloudRetailV2Interval
   */
  public function getPrice()
  {
    return $this->price;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2PriceInfoPriceRange::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PriceInfoPriceRange');

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

namespace Google\Service\Contentwarehouse;

class FreebasePropertyValue extends \Google\Collection
{
  protected $collection_key = 'value';
  /**
   * @var FreebaseId
   */
  public $property;
  protected $propertyType = FreebaseId::class;
  protected $propertyDataType = '';
  /**
   * @var string
   */
  public $totalValueCount;
  /**
   * @var FreebaseValue[]
   */
  public $value;
  protected $valueType = FreebaseValue::class;
  protected $valueDataType = 'array';
  /**
   * @var string
   */
  public $valueStatus;

  /**
   * @param FreebaseId
   */
  public function setProperty(FreebaseId $property)
  {
    $this->property = $property;
  }
  /**
   * @return FreebaseId
   */
  public function getProperty()
  {
    return $this->property;
  }
  /**
   * @param string
   */
  public function setTotalValueCount($totalValueCount)
  {
    $this->totalValueCount = $totalValueCount;
  }
  /**
   * @return string
   */
  public function getTotalValueCount()
  {
    return $this->totalValueCount;
  }
  /**
   * @param FreebaseValue[]
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return FreebaseValue[]
   */
  public function getValue()
  {
    return $this->value;
  }
  /**
   * @param string
   */
  public function setValueStatus($valueStatus)
  {
    $this->valueStatus = $valueStatus;
  }
  /**
   * @return string
   */
  public function getValueStatus()
  {
    return $this->valueStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FreebasePropertyValue::class, 'Google_Service_Contentwarehouse_FreebasePropertyValue');

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

namespace Google\Service\Vision;

class Paragraph extends \Google\Collection
{
  protected $collection_key = 'words';
  /**
   * @var BoundingPoly
   */
  public $boundingBox;
  protected $boundingBoxType = BoundingPoly::class;
  protected $boundingBoxDataType = '';
  /**
   * @var float
   */
  public $confidence;
  /**
   * @var TextProperty
   */
  public $property;
  protected $propertyType = TextProperty::class;
  protected $propertyDataType = '';
  /**
   * @var Word[]
   */
  public $words;
  protected $wordsType = Word::class;
  protected $wordsDataType = 'array';

  /**
   * @param BoundingPoly
   */
  public function setBoundingBox(BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /**
   * @return BoundingPoly
   */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /**
   * @param float
   */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /**
   * @return float
   */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /**
   * @param TextProperty
   */
  public function setProperty(TextProperty $property)
  {
    $this->property = $property;
  }
  /**
   * @return TextProperty
   */
  public function getProperty()
  {
    return $this->property;
  }
  /**
   * @param Word[]
   */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /**
   * @return Word[]
   */
  public function getWords()
  {
    return $this->words;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Paragraph::class, 'Google_Service_Vision_Paragraph');

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

namespace Google\Service\DriveLabels;

class GoogleAppsDriveLabelsV2DeltaUpdateLabelRequestUpdateFieldTypeRequest extends \Google\Model
{
  /**
   * @var GoogleAppsDriveLabelsV2FieldDateOptions
   */
  public $dateOptions;
  protected $dateOptionsType = GoogleAppsDriveLabelsV2FieldDateOptions::class;
  protected $dateOptionsDataType = '';
  /**
   * @var string
   */
  public $id;
  /**
   * @var GoogleAppsDriveLabelsV2FieldIntegerOptions
   */
  public $integerOptions;
  protected $integerOptionsType = GoogleAppsDriveLabelsV2FieldIntegerOptions::class;
  protected $integerOptionsDataType = '';
  /**
   * @var GoogleAppsDriveLabelsV2FieldLongTextOptions
   */
  public $longTextOptions;
  protected $longTextOptionsType = GoogleAppsDriveLabelsV2FieldLongTextOptions::class;
  protected $longTextOptionsDataType = '';
  /**
   * @var GoogleAppsDriveLabelsV2FieldSelectionOptions
   */
  public $selectionOptions;
  protected $selectionOptionsType = GoogleAppsDriveLabelsV2FieldSelectionOptions::class;
  protected $selectionOptionsDataType = '';
  /**
   * @var GoogleAppsDriveLabelsV2FieldTextOptions
   */
  public $textOptions;
  protected $textOptionsType = GoogleAppsDriveLabelsV2FieldTextOptions::class;
  protected $textOptionsDataType = '';
  /**
   * @var string
   */
  public $updateMask;
  /**
   * @var GoogleAppsDriveLabelsV2FieldUserOptions
   */
  public $userOptions;
  protected $userOptionsType = GoogleAppsDriveLabelsV2FieldUserOptions::class;
  protected $userOptionsDataType = '';

  /**
   * @param GoogleAppsDriveLabelsV2FieldDateOptions
   */
  public function setDateOptions(GoogleAppsDriveLabelsV2FieldDateOptions $dateOptions)
  {
    $this->dateOptions = $dateOptions;
  }
  /**
   * @return GoogleAppsDriveLabelsV2FieldDateOptions
   */
  public function getDateOptions()
  {
    return $this->dateOptions;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param GoogleAppsDriveLabelsV2FieldIntegerOptions
   */
  public function setIntegerOptions(GoogleAppsDriveLabelsV2FieldIntegerOptions $integerOptions)
  {
    $this->integerOptions = $integerOptions;
  }
  /**
   * @return GoogleAppsDriveLabelsV2FieldIntegerOptions
   */
  public function getIntegerOptions()
  {
    return $this->integerOptions;
  }
  /**
   * @param GoogleAppsDriveLabelsV2FieldLongTextOptions
   */
  public function setLongTextOptions(GoogleAppsDriveLabelsV2FieldLongTextOptions $longTextOptions)
  {
    $this->longTextOptions = $longTextOptions;
  }
  /**
   * @return GoogleAppsDriveLabelsV2FieldLongTextOptions
   */
  public function getLongTextOptions()
  {
    return $this->longTextOptions;
  }
  /**
   * @param GoogleAppsDriveLabelsV2FieldSelectionOptions
   */
  public function setSelectionOptions(GoogleAppsDriveLabelsV2FieldSelectionOptions $selectionOptions)
  {
    $this->selectionOptions = $selectionOptions;
  }
  /**
   * @return GoogleAppsDriveLabelsV2FieldSelectionOptions
   */
  public function getSelectionOptions()
  {
    return $this->selectionOptions;
  }
  /**
   * @param GoogleAppsDriveLabelsV2FieldTextOptions
   */
  public function setTextOptions(GoogleAppsDriveLabelsV2FieldTextOptions $textOptions)
  {
    $this->textOptions = $textOptions;
  }
  /**
   * @return GoogleAppsDriveLabelsV2FieldTextOptions
   */
  public function getTextOptions()
  {
    return $this->textOptions;
  }
  /**
   * @param string
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
  /**
   * @param GoogleAppsDriveLabelsV2FieldUserOptions
   */
  public function setUserOptions(GoogleAppsDriveLabelsV2FieldUserOptions $userOptions)
  {
    $this->userOptions = $userOptions;
  }
  /**
   * @return GoogleAppsDriveLabelsV2FieldUserOptions
   */
  public function getUserOptions()
  {
    return $this->userOptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAppsDriveLabelsV2DeltaUpdateLabelRequestUpdateFieldTypeRequest::class, 'Google_Service_DriveLabels_GoogleAppsDriveLabelsV2DeltaUpdateLabelRequestUpdateFieldTypeRequest');

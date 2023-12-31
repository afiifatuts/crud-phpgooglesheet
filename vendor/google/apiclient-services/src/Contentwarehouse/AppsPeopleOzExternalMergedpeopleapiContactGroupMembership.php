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

class AppsPeopleOzExternalMergedpeopleapiContactGroupMembership extends \Google\Model
{
  /**
   * @var string
   */
  public $contactGroupId;
  /**
   * @var AppsPeopleOzExternalMergedpeopleapiDelegatedGroupInfo
   */
  public $delegatedGroupInfo;
  protected $delegatedGroupInfoType = AppsPeopleOzExternalMergedpeopleapiDelegatedGroupInfo::class;
  protected $delegatedGroupInfoDataType = '';
  /**
   * @var AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public $metadata;
  protected $metadataType = AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata::class;
  protected $metadataDataType = '';
  /**
   * @var string
   */
  public $systemContactGroupId;

  /**
   * @param string
   */
  public function setContactGroupId($contactGroupId)
  {
    $this->contactGroupId = $contactGroupId;
  }
  /**
   * @return string
   */
  public function getContactGroupId()
  {
    return $this->contactGroupId;
  }
  /**
   * @param AppsPeopleOzExternalMergedpeopleapiDelegatedGroupInfo
   */
  public function setDelegatedGroupInfo(AppsPeopleOzExternalMergedpeopleapiDelegatedGroupInfo $delegatedGroupInfo)
  {
    $this->delegatedGroupInfo = $delegatedGroupInfo;
  }
  /**
   * @return AppsPeopleOzExternalMergedpeopleapiDelegatedGroupInfo
   */
  public function getDelegatedGroupInfo()
  {
    return $this->delegatedGroupInfo;
  }
  /**
   * @param AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public function setMetadata(AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string
   */
  public function setSystemContactGroupId($systemContactGroupId)
  {
    $this->systemContactGroupId = $systemContactGroupId;
  }
  /**
   * @return string
   */
  public function getSystemContactGroupId()
  {
    return $this->systemContactGroupId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppsPeopleOzExternalMergedpeopleapiContactGroupMembership::class, 'Google_Service_Contentwarehouse_AppsPeopleOzExternalMergedpeopleapiContactGroupMembership');

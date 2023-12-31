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

namespace Google\Service\AndroidEnterprise;

class ServiceAccountKeysListResponse extends \Google\Collection
{
  protected $collection_key = 'serviceAccountKey';
  /**
   * @var ServiceAccountKey[]
   */
  public $serviceAccountKey;
  protected $serviceAccountKeyType = ServiceAccountKey::class;
  protected $serviceAccountKeyDataType = 'array';

  /**
   * @param ServiceAccountKey[]
   */
  public function setServiceAccountKey($serviceAccountKey)
  {
    $this->serviceAccountKey = $serviceAccountKey;
  }
  /**
   * @return ServiceAccountKey[]
   */
  public function getServiceAccountKey()
  {
    return $this->serviceAccountKey;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceAccountKeysListResponse::class, 'Google_Service_AndroidEnterprise_ServiceAccountKeysListResponse');

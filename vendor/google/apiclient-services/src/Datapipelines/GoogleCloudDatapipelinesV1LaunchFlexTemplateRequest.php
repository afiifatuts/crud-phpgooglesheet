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

namespace Google\Service\Datapipelines;

class GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest extends \Google\Model
{
  /**
   * @var GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter
   */
  public $launchParameter;
  protected $launchParameterType = GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter::class;
  protected $launchParameterDataType = '';
  /**
   * @var string
   */
  public $location;
  /**
   * @var string
   */
  public $projectId;
  /**
   * @var bool
   */
  public $validateOnly;

  /**
   * @param GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter
   */
  public function setLaunchParameter(GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter $launchParameter)
  {
    $this->launchParameter = $launchParameter;
  }
  /**
   * @return GoogleCloudDatapipelinesV1LaunchFlexTemplateParameter
   */
  public function getLaunchParameter()
  {
    return $this->launchParameter;
  }
  /**
   * @param string
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param string
   */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /**
   * @return string
   */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /**
   * @param bool
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest::class, 'Google_Service_Datapipelines_GoogleCloudDatapipelinesV1LaunchFlexTemplateRequest');

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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage extends \Google\Collection
{
  protected $collection_key = 'coverages';
  /**
   * @var float
   */
  public $coverageScore;
  /**
   * @var GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage[]
   */
  public $coverages;
  protected $coveragesType = GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage::class;
  protected $coveragesDataType = 'array';

  /**
   * @param float
   */
  public function setCoverageScore($coverageScore)
  {
    $this->coverageScore = $coverageScore;
  }
  /**
   * @return float
   */
  public function getCoverageScore()
  {
    return $this->coverageScore;
  }
  /**
   * @param GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage[]
   */
  public function setCoverages($coverages)
  {
    $this->coverages = $coverages;
  }
  /**
   * @return GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage[]
   */
  public function getCoverages()
  {
    return $this->coverages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage');

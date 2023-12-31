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

class KnowledgeAnswersSensitivityInstructionIntent extends \Google\Model
{
  /**
   * @var KnowledgeAnswersSensitivityIntentEvalPolicy
   */
  public $eval;
  protected $evalType = KnowledgeAnswersSensitivityIntentEvalPolicy::class;
  protected $evalDataType = '';
  /**
   * @var KnowledgeAnswersSensitivityMyActivityPolicy
   */
  public $footprints;
  protected $footprintsType = KnowledgeAnswersSensitivityMyActivityPolicy::class;
  protected $footprintsDataType = '';
  /**
   * @var KnowledgeAnswersSensitivityLoggingPolicy
   */
  public $logging;
  protected $loggingType = KnowledgeAnswersSensitivityLoggingPolicy::class;
  protected $loggingDataType = '';
  /**
   * @var KnowledgeAnswersSensitivityServingPolicy
   */
  public $serving;
  protected $servingType = KnowledgeAnswersSensitivityServingPolicy::class;
  protected $servingDataType = '';
  /**
   * @var KnowledgeAnswersSensitivityStoragePolicy
   */
  public $storage;
  protected $storageType = KnowledgeAnswersSensitivityStoragePolicy::class;
  protected $storageDataType = '';

  /**
   * @param KnowledgeAnswersSensitivityIntentEvalPolicy
   */
  public function setEval(KnowledgeAnswersSensitivityIntentEvalPolicy $eval)
  {
    $this->eval = $eval;
  }
  /**
   * @return KnowledgeAnswersSensitivityIntentEvalPolicy
   */
  public function getEval()
  {
    return $this->eval;
  }
  /**
   * @param KnowledgeAnswersSensitivityMyActivityPolicy
   */
  public function setFootprints(KnowledgeAnswersSensitivityMyActivityPolicy $footprints)
  {
    $this->footprints = $footprints;
  }
  /**
   * @return KnowledgeAnswersSensitivityMyActivityPolicy
   */
  public function getFootprints()
  {
    return $this->footprints;
  }
  /**
   * @param KnowledgeAnswersSensitivityLoggingPolicy
   */
  public function setLogging(KnowledgeAnswersSensitivityLoggingPolicy $logging)
  {
    $this->logging = $logging;
  }
  /**
   * @return KnowledgeAnswersSensitivityLoggingPolicy
   */
  public function getLogging()
  {
    return $this->logging;
  }
  /**
   * @param KnowledgeAnswersSensitivityServingPolicy
   */
  public function setServing(KnowledgeAnswersSensitivityServingPolicy $serving)
  {
    $this->serving = $serving;
  }
  /**
   * @return KnowledgeAnswersSensitivityServingPolicy
   */
  public function getServing()
  {
    return $this->serving;
  }
  /**
   * @param KnowledgeAnswersSensitivityStoragePolicy
   */
  public function setStorage(KnowledgeAnswersSensitivityStoragePolicy $storage)
  {
    $this->storage = $storage;
  }
  /**
   * @return KnowledgeAnswersSensitivityStoragePolicy
   */
  public function getStorage()
  {
    return $this->storage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KnowledgeAnswersSensitivityInstructionIntent::class, 'Google_Service_Contentwarehouse_KnowledgeAnswersSensitivityInstructionIntent');

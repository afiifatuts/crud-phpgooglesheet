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

class KnowledgeAnswersDurationType extends \Google\Model
{
  /**
   * @var NlpMeaningComponentSpecificContracts
   */
  public $componentSpecificContracts;
  protected $componentSpecificContractsType = NlpMeaningComponentSpecificContracts::class;
  protected $componentSpecificContractsDataType = '';
  /**
   * @var KnowledgeAnswersRangeConstraint
   */
  public $rangeConstraint;
  protected $rangeConstraintType = KnowledgeAnswersRangeConstraint::class;
  protected $rangeConstraintDataType = '';
  /**
   * @var NlpMeaningMeaningRemodelings
   */
  public $remodelings;
  protected $remodelingsType = NlpMeaningMeaningRemodelings::class;
  protected $remodelingsDataType = '';

  /**
   * @param NlpMeaningComponentSpecificContracts
   */
  public function setComponentSpecificContracts(NlpMeaningComponentSpecificContracts $componentSpecificContracts)
  {
    $this->componentSpecificContracts = $componentSpecificContracts;
  }
  /**
   * @return NlpMeaningComponentSpecificContracts
   */
  public function getComponentSpecificContracts()
  {
    return $this->componentSpecificContracts;
  }
  /**
   * @param KnowledgeAnswersRangeConstraint
   */
  public function setRangeConstraint(KnowledgeAnswersRangeConstraint $rangeConstraint)
  {
    $this->rangeConstraint = $rangeConstraint;
  }
  /**
   * @return KnowledgeAnswersRangeConstraint
   */
  public function getRangeConstraint()
  {
    return $this->rangeConstraint;
  }
  /**
   * @param NlpMeaningMeaningRemodelings
   */
  public function setRemodelings(NlpMeaningMeaningRemodelings $remodelings)
  {
    $this->remodelings = $remodelings;
  }
  /**
   * @return NlpMeaningMeaningRemodelings
   */
  public function getRemodelings()
  {
    return $this->remodelings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KnowledgeAnswersDurationType::class, 'Google_Service_Contentwarehouse_KnowledgeAnswersDurationType');

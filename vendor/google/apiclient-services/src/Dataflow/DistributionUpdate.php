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

namespace Google\Service\Dataflow;

class DistributionUpdate extends \Google\Model
{
  /**
   * @var SplitInt64
   */
  public $count;
  protected $countType = SplitInt64::class;
  protected $countDataType = '';
  /**
   * @var Histogram
   */
  public $histogram;
  protected $histogramType = Histogram::class;
  protected $histogramDataType = '';
  /**
   * @var SplitInt64
   */
  public $max;
  protected $maxType = SplitInt64::class;
  protected $maxDataType = '';
  /**
   * @var SplitInt64
   */
  public $min;
  protected $minType = SplitInt64::class;
  protected $minDataType = '';
  /**
   * @var SplitInt64
   */
  public $sum;
  protected $sumType = SplitInt64::class;
  protected $sumDataType = '';
  public $sumOfSquares;

  /**
   * @param SplitInt64
   */
  public function setCount(SplitInt64 $count)
  {
    $this->count = $count;
  }
  /**
   * @return SplitInt64
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * @param Histogram
   */
  public function setHistogram(Histogram $histogram)
  {
    $this->histogram = $histogram;
  }
  /**
   * @return Histogram
   */
  public function getHistogram()
  {
    return $this->histogram;
  }
  /**
   * @param SplitInt64
   */
  public function setMax(SplitInt64 $max)
  {
    $this->max = $max;
  }
  /**
   * @return SplitInt64
   */
  public function getMax()
  {
    return $this->max;
  }
  /**
   * @param SplitInt64
   */
  public function setMin(SplitInt64 $min)
  {
    $this->min = $min;
  }
  /**
   * @return SplitInt64
   */
  public function getMin()
  {
    return $this->min;
  }
  /**
   * @param SplitInt64
   */
  public function setSum(SplitInt64 $sum)
  {
    $this->sum = $sum;
  }
  /**
   * @return SplitInt64
   */
  public function getSum()
  {
    return $this->sum;
  }
  public function setSumOfSquares($sumOfSquares)
  {
    $this->sumOfSquares = $sumOfSquares;
  }
  public function getSumOfSquares()
  {
    return $this->sumOfSquares;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DistributionUpdate::class, 'Google_Service_Dataflow_DistributionUpdate');

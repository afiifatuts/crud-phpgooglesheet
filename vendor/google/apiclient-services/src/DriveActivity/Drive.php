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

namespace Google\Service\DriveActivity;

class Drive extends \Google\Model
{
  /**
   * @var string
   */
  public $name;
  /**
   * @var DriveItem
   */
  public $root;
  protected $rootType = DriveItem::class;
  protected $rootDataType = '';
  /**
   * @var string
   */
  public $title;

  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param DriveItem
   */
  public function setRoot(DriveItem $root)
  {
    $this->root = $root;
  }
  /**
   * @return DriveItem
   */
  public function getRoot()
  {
    return $this->root;
  }
  /**
   * @param string
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Drive::class, 'Google_Service_DriveActivity_Drive');

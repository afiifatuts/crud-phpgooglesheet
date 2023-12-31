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

namespace Google\Service\Vault;

class AccountCount extends \Google\Model
{
  /**
   * @var UserInfo
   */
  public $account;
  protected $accountType = UserInfo::class;
  protected $accountDataType = '';
  /**
   * @var string
   */
  public $count;

  /**
   * @param UserInfo
   */
  public function setAccount(UserInfo $account)
  {
    $this->account = $account;
  }
  /**
   * @return UserInfo
   */
  public function getAccount()
  {
    return $this->account;
  }
  /**
   * @param string
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountCount::class, 'Google_Service_Vault_AccountCount');

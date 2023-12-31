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

namespace Google\Service\CertificateAuthorityService;

class AllowedKeyType extends \Google\Model
{
  /**
   * @var EcKeyType
   */
  public $ellipticCurve;
  protected $ellipticCurveType = EcKeyType::class;
  protected $ellipticCurveDataType = '';
  /**
   * @var RsaKeyType
   */
  public $rsa;
  protected $rsaType = RsaKeyType::class;
  protected $rsaDataType = '';

  /**
   * @param EcKeyType
   */
  public function setEllipticCurve(EcKeyType $ellipticCurve)
  {
    $this->ellipticCurve = $ellipticCurve;
  }
  /**
   * @return EcKeyType
   */
  public function getEllipticCurve()
  {
    return $this->ellipticCurve;
  }
  /**
   * @param RsaKeyType
   */
  public function setRsa(RsaKeyType $rsa)
  {
    $this->rsa = $rsa;
  }
  /**
   * @return RsaKeyType
   */
  public function getRsa()
  {
    return $this->rsa;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllowedKeyType::class, 'Google_Service_CertificateAuthorityService_AllowedKeyType');

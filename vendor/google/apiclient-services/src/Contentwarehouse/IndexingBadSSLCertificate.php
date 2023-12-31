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

class IndexingBadSSLCertificate extends \Google\Model
{
  /**
   * @var TrawlerSSLCertificateInfo
   */
  public $badSslCertificate;
  protected $badSslCertificateType = TrawlerSSLCertificateInfo::class;
  protected $badSslCertificateDataType = '';
  /**
   * @var string
   */
  public $urlWithBadSslCertificate;

  /**
   * @param TrawlerSSLCertificateInfo
   */
  public function setBadSslCertificate(TrawlerSSLCertificateInfo $badSslCertificate)
  {
    $this->badSslCertificate = $badSslCertificate;
  }
  /**
   * @return TrawlerSSLCertificateInfo
   */
  public function getBadSslCertificate()
  {
    return $this->badSslCertificate;
  }
  /**
   * @param string
   */
  public function setUrlWithBadSslCertificate($urlWithBadSslCertificate)
  {
    $this->urlWithBadSslCertificate = $urlWithBadSslCertificate;
  }
  /**
   * @return string
   */
  public function getUrlWithBadSslCertificate()
  {
    return $this->urlWithBadSslCertificate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IndexingBadSSLCertificate::class, 'Google_Service_Contentwarehouse_IndexingBadSSLCertificate');

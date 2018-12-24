<?php
/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * --------------------------------------------------------------------------
 *
 * PHP version 5
 *
 * @category AlibabaCloud
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2018 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link https://github.com/aliyun/openapi-sdk-php-client
 */

namespace AlibabaCloud\Client\Tests\Unit\Client\Exception;

use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Result\Result;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * Class ServerExceptionTest
 *
 * @package      AlibabaCloud\Client\Tests\Unit\Client\Exception
 *
 * @author       Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright    Alibaba Group
 * @license      http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link         https://github.com/aliyun/openapi-sdk-php-client
 *
 * @coversDefaultClass \AlibabaCloud\Client\Exception\ServerException
 */
class ServerExceptionTest extends TestCase
{

    /**
     * @covers ::__construct
     * @covers ::getErrorMessage
     * @covers ::getErrorCode
     * @covers ::getRequestId
     * @covers ::getResult
     */
    public function testConstruct()
    {

        // Setup
        $errorMessage = 'message';
        $errorCode    = 'code';
        $requestId    = null;

        // Test
        $e = new ServerException(new Result(new Response()), $errorMessage, $errorCode);

        // Assert
        $this->assertEquals($errorMessage, $e->getErrorMessage());
        $this->assertEquals($errorCode, $e->getErrorCode());
        $this->assertEquals($requestId, $e->getRequestId());
        $this->assertInstanceOf(Result::class, $e->getResult());
    }
}

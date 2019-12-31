<?php

/**
 * @see       https://github.com/mezzio/mezzio for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio/blob/master/LICENSE.md New BSD License
 */

namespace MezzioTest\TestAsset;

use Interop\Container\Exception\ContainerException as BaseException;
use RuntimeException;

class ContainerException extends RuntimeException implements BaseException
{
}

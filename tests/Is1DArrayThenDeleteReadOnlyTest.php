<?php
declare (strict_types=1);

namespace ParagonIE\EasyDB\Tests;

use InvalidArgumentException;
use ParagonIE\EasyDB\EasyDB;

class Is1DArrayThenDeleteReadOnlyTest
    extends
        EasyDBTest
{

    /**
    * @dataProvider GoodFactoryCreateArgument2EasyDBProvider
    * @depends ParagonIE\EasyDB\Tests\Is1DArrayTest::testIs1DArray
    */
    public function testDeleteThrowsException(callable $cb)
    {
        $db = $this->EasyDBExpectedFromCallable($cb);
        $this->expectException(InvalidArgumentException::class);
        $db->delete('irrelevant_but_valid_tablename', [[1]]);
    }

    /**
    * @dataProvider GoodFactoryCreateArgument2EasyDBProvider
    */
    public function testDeleteTableNameEmptyThrowsException(callable $cb)
    {
        $db = $this->EasyDBExpectedFromCallable($cb);
        $this->expectException(InvalidArgumentException::class);
        $db->delete('', ['foo' => 'bar']);
    }

    /**
    * @dataProvider GoodFactoryCreateArgument2EasyDBProvider
    */
    public function testDeleteTableNameInvalidThrowsException(callable $cb)
    {
        $db = $this->EasyDBExpectedFromCallable($cb);
        $this->expectException(InvalidArgumentException::class);
        $db->delete('1foo', ['foo' => 'bar']);
    }

    /**
    * @dataProvider GoodFactoryCreateArgument2EasyDBProvider
    */
    public function testDeleteConditionsReturnsNull(callable $cb)
    {
        $db = $this->EasyDBExpectedFromCallable($cb);
        $this->assertEquals(
            $db->delete('irrelevant_but_valid_tablename', []),
            null
        );
    }
}

<?php
namespace Metaphore\Tests\Store;

use Metaphore\Store\MockStore;

class MockStoreTest extends AbstractStoreTest
{
    public function setUp()
    {
        $this->store = new MockStore();
    }

    public function tearDown()
    {
        $this->store = null;
    }

    public function testDeleteReturnsFalseIfKeyNotExists()
    {
        $result = $this->store->delete('banega');

        $this->assertFalse($result);
    }
}

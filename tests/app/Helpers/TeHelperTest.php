<?php

namespace Tests\Helpers;

use Carbon\Carbon;
use DTApi\Helpers\TeHelper;
use PHPUnit\Framework\TestCase;

class TeHelperTest extends TestCase
{
    use RefreshDatabase;

    public function testWillExpireAt()
    {
        $dueTime = Carbon::parse('2024-03-20 12:00:00');
        $createdAt = Carbon::parse('2024-03-18 09:00:00');

        $result = TeHelper::willExpireAt($dueTime, $createdAt);
        $this->assertEquals('2024-03-20 12:00:00', $result);
    }

}
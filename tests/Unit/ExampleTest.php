<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);

        for ($i = 1; $i <= 5; $i++) {
            Log::info('test');
        }
    }
}

<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/BillingCalculator.php';

$calculator = new BillingCalculator();

assertSameFloat(50.00, $calculator->proratedCharge(100.00, 15, 30), 'proration should split cycle by active days');
assertSame([1, 3, 7], $calculator->retrySchedule('insufficient_funds'), 'insufficient funds should use dunning retry schedule');

echo "PASS billing domain\n";

function assertSameFloat(float $expected, float $actual, string $message): void
{
    if (abs($expected - $actual) > 0.0001) {
        throw new RuntimeException($message . " Expected {$expected}, got {$actual}");
    }
}

function assertSame(array $expected, array $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException($message);
    }
}

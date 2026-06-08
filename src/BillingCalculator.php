<?php

declare(strict_types=1);

final class BillingCalculator
{
    public function proratedCharge(float $monthlyPrice, int $activeDays, int $daysInCycle): float
    {
        if ($monthlyPrice < 0 || $activeDays < 0 || $daysInCycle <= 0) {
            throw new InvalidArgumentException('Invalid billing inputs.');
        }

        return round(($monthlyPrice / $daysInCycle) * min($activeDays, $daysInCycle), 2);
    }

    public function retrySchedule(string $failureReason): array
    {
        return match ($failureReason) {
            'insufficient_funds' => [1, 3, 7],
            'gateway_timeout' => [0, 1, 4],
            'expired_card' => [0],
            default => [2, 5],
        };
    }
}

# Laravel Billing Domain

PHP project for subscription billing, proration, retries, and invoice generation. It is framework-free so it can run locally without Composer, while mirroring Laravel service-class design.

## Resume Fit

- Laravel subscription billing engine.
- Payment retry and invoice generation.
- Financial calculation tests.

## Run

```powershell
php tests\BillingDomainTest.php
```

## Production Next Steps

- Convert domain services into Laravel service classes.
- Add Eloquent models and migrations.
- Add Horizon jobs for billing retries.

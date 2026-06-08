# Laravel Billing Domain

A framework-light PHP billing domain that models subscription proration and retry schedule decisions in a Laravel-friendly service style.

## Stack

PHP 8, Laravel-style billing domain, proration

## Problem

Billing defects quickly become customer-impacting. This project isolates billing math and retry policy so it can be tested without a full framework boot.

## Architecture

- BillingCalculator.php owns proration and retry schedule logic.
- The test script verifies cent-level proration and dunning schedule selection.
- The design can be moved directly into Laravel service classes.

## Implemented Production Readiness

- CI executes the PHP billing test script.
- Invalid billing inputs fail fast.
- Retry schedules are explicit and provider-independent.

## Run And Test

```powershell
php tests\BillingDomainTest.php
```

## Quality Gates

- Project-specific GitHub Actions workflow included under .github/workflows/ci.yml.
- Generated build outputs and dependency folders are excluded through .gitignore.
- Tests and validation commands are intentionally small enough to run during code review.

## Production Extension Points

- Add Laravel migrations and Eloquent models.
- Add Horizon queue jobs for retries.
- Add invoice PDF generation.

## Repository Hygiene

This repository contains original portfolio code only. It does not include employer source code, private resumes, generated binaries, local credentials, or large media files.


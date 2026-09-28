## 2024-05-24 - Optimize Eloquent Checks
**Learning:** Pulling entire datasets into PHP memory (e.g. `->get()->toArray()`) just to perform count checks is a significant bottleneck that can lead to memory exhaustion. Additionally, loading full collections to extract only the first and last elements is extremely inefficient.
**Action:** Always use database-level aggregates and limiters like `->exists()`, `->count()`, `->latest('id')->first()`, and `->oldest('id')->first()` to minimize memory footprint and execution time.

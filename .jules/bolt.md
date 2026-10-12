## 2024-05-24 - Optimize Eloquent Exists/Count Checks
**Learning:** Checking for existence or counting rows by pulling the entire result set into memory using `->get()->toArray()` and `count()` is a major performance bottleneck that can lead to OOM errors and high latency.
**Action:** Always execute `exists()` and `count()` directly on the query builder to perform the operation at the database level.

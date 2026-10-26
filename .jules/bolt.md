## 2026-10-26 - Optimize Eloquent Queries
**Learning:** Avoid loading entire collections into PHP memory just to access the first or last elements, as it can cause memory exhaustion on large datasets.
**Action:** Use database-level queries like `->latest('id')->first()` and `->oldest('id')->first()` to reduce memory consumption. When executing multiple terminating methods on a shared base query builder, use `(clone $query)` for each to prevent state mutation.

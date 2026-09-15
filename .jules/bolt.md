## 2024-09-15 - Optimize Eloquent collection access
**Learning:** Avoid loading entire Eloquent collections into PHP memory just to access the first/last elements or count records. This can cause massive memory usage as the data size grows.
**Action:** Use database-level queries like `->count()`, `->latest('id')->first()`, and `->oldest('id')->first()` to fetch only what is needed, and use `(clone $query)` when building multiple results off the same base query.

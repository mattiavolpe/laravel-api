## 2024-07-07 - Optimize Eloquent existence/count checks
**Learning:** Found an anti-pattern where records were being pulled into PHP memory using `count(Model::where(...)->get()->toArray())` just to check existence or count. This can cause severe memory exhaustion on large datasets.
**Action:** Always use database-level aggregations like `->exists()` (for checking > 0) or `->count()` (for specific counts) instead of loading full collections into memory.

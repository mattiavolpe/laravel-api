## 2024-06-10 - Eloquent Collection Count Optimization
**Learning:** Using `count(Model::where(...)->get()->toArray())` is a major performance bottleneck because it executes a `SELECT *` query and hydrates full Eloquent models into PHP memory just to count them.
**Action:** Always use database-level aggregations like `->exists()` or `->count()` directly on the query builder for fast execution and minimal memory usage.

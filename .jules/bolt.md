## 2024-09-14 - Optimize Eloquent Exists/Count Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` to check for existence pulls all matching records into PHP memory, causing significant performance and memory bottlenecks on large datasets.
**Action:** Always use database-level methods like `->exists()` and `->count()` to evaluate existence or record counts directly in the database without hydrating Eloquent models or arrays.

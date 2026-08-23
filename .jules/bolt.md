## 2024-05-18 - Avoid fetching Eloquent collections for counting
**Learning:** Loading Eloquent query results into PHP memory using `count(Model::where(...)->get()->toArray())` causes severe memory bloat and performance degradation, especially for existence checks.
**Action:** Always use database-level aggregations like `->exists()` for checking `> 0` or `->count()` for specific count checks to optimize performance and prevent memory exhaustion.

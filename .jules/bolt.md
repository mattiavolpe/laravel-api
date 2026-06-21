## 2024-06-21 - Optimize Eloquent Exists/Count Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` pulls all matched records into PHP memory just to check existence or count them, which causes performance bottlenecks and memory exhaustion for large tables.
**Action:** Use database-level aggregations directly. Use `->exists()` for checking if records exist (`> 0`), and `->count()` for checking the exact count.

## 2024-09-18 - Optimize Eloquent existence and count checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` for counting or existence checks pulls entire result sets into PHP memory, creating significant memory and performance bottlenecks, especially for large datasets.
**Action:** Always use database-level queries like `->exists()` for `> 0` checks, and `->count()` for specific count checks to prevent memory exhaustion and speed up the query.

## 2024-06-27 - [Optimize Eloquent Counting]
**Learning:** Using `count(Model::where(...)->get()->toArray())` for counting or existence checks pulls all matching records into PHP memory, causing memory exhaustion on large datasets instead of executing at the database level.
**Action:** Use `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and prevent memory issues.

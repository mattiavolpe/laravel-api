## 2024-07-27 - Optimize Eloquent Exists/Count Checks
**Learning:** In Laravel/Eloquent, pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks causes significant memory and performance bottlenecks, especially on large datasets.
**Action:** Always execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for specific count checks to prevent memory exhaustion.

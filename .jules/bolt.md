## 2024-07-14 - Optimize Eloquent Query Counts
**Learning:** In Laravel/Eloquent, avoid pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks. This causes memory exhaustion and performance bottlenecks on large tables.
**Action:** Always execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for specific count checks.

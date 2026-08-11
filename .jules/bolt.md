## 2024-08-11 - Optimize Eloquent existence and count checks
**Learning:** In Laravel/Eloquent, avoid pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and prevent memory exhaustion.

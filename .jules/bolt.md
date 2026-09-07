## 2024-05-24 - Optimize Eloquent existence checks
**Learning:** In Laravel/Eloquent, avoid pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks.
**Action:** Instead, execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for `> 1` specific count checks to optimize performance and prevent memory exhaustion.

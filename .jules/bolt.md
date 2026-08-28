## 2024-08-28 - Optimize Eloquent existence and count checks
**Learning:** Pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks is inefficient and can cause memory exhaustion.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and prevent memory exhaustion.

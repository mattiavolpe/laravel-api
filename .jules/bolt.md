## 2024-07-31 - Optimize Eloquent existence checks
**Learning:** Avoid pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks, as it can cause memory exhaustion on large datasets. This is an anti-pattern observed in controllers.
**Action:** Execute queries directly at the database level using `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and prevent memory exhaustion.

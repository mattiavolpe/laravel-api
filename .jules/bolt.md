## 2024-06-24 - Database Level Counting Optimization
**Learning:** In Laravel/Eloquent, pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks is a severe performance bottleneck and can lead to memory exhaustion, especially on large datasets.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for `> 1` specific count checks to optimize performance and prevent memory exhaustion.

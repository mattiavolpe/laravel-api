## 2024-05-24 - Avoid fetching entire collection for existence/count checks
**Learning:** In Laravel/Eloquent, pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks is a massive performance bottleneck and can cause memory exhaustion.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for `> 1` specific count checks to optimize performance and prevent memory exhaustion.

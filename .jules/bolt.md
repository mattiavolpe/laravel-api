## 2024-09-06 - Avoid loading collections into memory for count checks
**Learning:** Avoid pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks in Laravel/Eloquent. This can cause severe memory exhaustion.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for `> 1` specific count checks to optimize performance.

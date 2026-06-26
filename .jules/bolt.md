## 2024-06-26 - Optimize Eloquent Check
**Learning:** Avoid pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for counting or existence checks.
**Action:** Execute queries directly at the database level using `->exists()` for `> 0` checks, and `->count()` for `> 1` specific count checks.

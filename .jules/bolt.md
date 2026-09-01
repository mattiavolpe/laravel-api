## 2024-05-18 - Avoid loading full collections into memory for counting
**Learning:** Using `count(Model::where(...)->get()->toArray())` pulls all matching records into PHP memory as arrays just to count them, causing memory exhaustion and poor performance on large datasets.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for specific count checks.

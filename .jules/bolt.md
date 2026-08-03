## 2024-08-03 - Optimize Eloquent Exists/Count Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` for counting or existence checks pulls all matched records into PHP memory, which can lead to memory exhaustion and poor performance on large datasets.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and prevent memory exhaustion.

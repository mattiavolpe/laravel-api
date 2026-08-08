## 2024-08-08 - Eloquent Query Optimization
**Learning:** Pulling records into PHP memory using `count(Model::where(...)->get()->toArray())` for existence or count checks is extremely inefficient and causes memory exhaustion for large datasets.
**Action:** Execute queries directly at the database level by using `->exists()` for `> 0` checks, and `->count() > 1` for specific count checks.

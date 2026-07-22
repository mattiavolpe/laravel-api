## 2024-07-22 - Optimize Eloquent existence and count checks
**Learning:** Found instances of `count(Model::where(...)->get()->toArray())` which pulls all records into PHP memory to count them, causing unnecessary memory consumption and database load.
**Action:** Use `->exists()` for checking existence and `->count()` for specific counts to execute the query at the database level instead.

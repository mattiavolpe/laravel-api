## 2024-06-20 - Eloquent exists() and count() Optimization
**Learning:** Using `count(Model::where(...)->get()->toArray())` is a major performance bottleneck because it queries all matching records from the database, loads them into memory as Eloquent models, and then converts them to an array just to count them.
**Action:** Replace this pattern with `->exists()` when checking for `> 0` and `->count()` when checking for `> 1` directly on the query builder for fast, database-level execution.

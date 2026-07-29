## 2024-07-29 - Optimize Eloquent existence checks
**Learning:** Checking for model existence using `count(Model::where(...)->get()->toArray())` pulls all matching records into application memory, causing severe performance bottlenecks.
**Action:** Use `->exists()` or `->count()` directly on the query builder to perform the aggregation at the database level, returning only a boolean or integer.

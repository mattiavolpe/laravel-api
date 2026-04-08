## 2024-04-08 - [Optimize Eloquent existence checks]
**Learning:** Checking for model existence using `count(Model::where(...)->get()->toArray())` inefficiently loads all matching records into PHP memory to perform the count.
**Action:** Use `->exists()` and `->count()` directly on the query builder to perform the check efficiently at the database level.

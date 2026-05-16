## 2024-05-23 - Optimize Eloquent Existance Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` inefficiently loads all matching records into PHP memory and hydrates Eloquent models just to perform a count.
**Action:** Use database-level methods like `->exists()` or `->count()` directly on the query builder for much faster execution and significantly lower memory consumption.

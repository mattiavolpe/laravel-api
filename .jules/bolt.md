## 2024-06-15 - [Inefficient Query Count]
**Learning:** Using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into PHP memory and converts them to arrays just to count them.
**Action:** Use `Model::where(...)->exists()` or `Model::where(...)->count()` directly on the query builder to perform the count at the database level.

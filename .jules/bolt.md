## 2024-05-31 - Eloquent In-Memory Collection Bottleneck
**Learning:** Using `count(Model::where(...)->get()->toArray())` creates a severe memory bottleneck by loading every matching database record into PHP memory before counting them.
**Action:** Always use efficient database-level query builder methods like `->exists()` and `->count()` directly on the query builder to prevent loading collections.

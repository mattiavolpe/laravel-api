## 2024-05-24 - Eloquent aggregate query optimization
**Learning:** Using `count(Model::where(...)->get()->toArray())` inefficiently loads all matching records into PHP memory, causing significant overhead for large datasets.
**Action:** Always use database-level aggregates like `->exists()` or `->count()` directly on the query builder to prevent unnecessary memory consumption and speed up database interactions.

## 2025-02-14 - Inefficient Eloquent count()
**Learning:** Using `count(Model::where(...)->get()->toArray())` is a major performance bottleneck because it loads all matching records into PHP memory, converts them to arrays, and then counts them in PHP. This is especially bad for large datasets.
**Action:** Always use the Eloquent `->exists()` or `->count()` methods directly on the query builder to perform the count at the database level, which is significantly faster and uses minimal memory.

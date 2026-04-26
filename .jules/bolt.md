## 2024-06-25 - Eloquent count optimization
**Learning:** Using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into PHP memory and counts them via an array. This can lead to memory exhaustion on large datasets.
**Action:** Always use database-level methods like `->exists()` for checking if any records exist, or `->count()` for counting the number of matching records directly via the database query engine.

## 2024-06-08 - Optimize Eloquent Exists and Count
**Learning:** Checking record existence using `count(Model::where(...)->get()->toArray())` is highly inefficient because it loads all records into PHP memory.
**Action:** Always use `Model::where(...)->exists()` or `Model::where(...)->count() > 0` directly on the query builder for fast, database-level execution.

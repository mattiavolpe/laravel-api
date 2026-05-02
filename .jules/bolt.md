## 2024-06-25 - Optimize Eloquent record existence checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into PHP memory and converts them to arrays.
**Action:** Always use `->exists()` (to check if any record exists) or `->count()` (to get the total count) directly on the query builder for fast, database-level execution.

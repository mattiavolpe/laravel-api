## 2024-05-24 - Optimize Eloquent Exists/Count Checks
**Learning:** Checking existence or counting records by fetching all results into PHP memory using `count(Model::where(...)->get()->toArray())` is highly inefficient and risks memory exhaustion.
**Action:** Always use database-level methods like `->exists()` for `> 0` checks and `->count()` for specific count checks to avoid pulling unnecessary data into PHP memory.

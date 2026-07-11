## 2024-05-24 - Avoid Memory Exhaustion with Eloquent Counts
**Learning:** Pulling all records into PHP memory using `count(Model::where(...)->get()->toArray())` just to count them or check for existence is extremely inefficient and can cause memory exhaustion on large datasets.
**Action:** Use database-level operations: `->exists()` for `> 0` checks, and `->count()` for specific count checks (e.g., `> 1`), to execute the query directly at the database level.

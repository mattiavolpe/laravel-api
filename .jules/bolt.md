## 2024-08-30 - Avoid pulling Eloquent collections into PHP memory for counting
**Learning:** Checking for record existence or counting by retrieving all records into memory via `count(Model::where(...)->get()->toArray())` causes high memory consumption and execution time.
**Action:** Use database-level query methods like `->exists()` for `> 0` checks and `->count()` for specific count checks to prevent memory exhaustion and optimize performance.

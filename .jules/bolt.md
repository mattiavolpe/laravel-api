## 2024-06-01 - [Avoid fetching all rows for existence/count check]
**Learning:** In Laravel/Eloquent, checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is extremely inefficient as it loads all matching records into PHP memory.
**Action:** Always use `->exists()` directly on the query builder for fast, database-level execution.

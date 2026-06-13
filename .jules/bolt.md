## 2026-06-13 - [Optimize Eloquent Exists Check]
**Learning:** In Laravel/Eloquent, checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into PHP memory.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution.
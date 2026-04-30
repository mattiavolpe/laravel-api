## 2024-06-25 - Avoid Eloquent get()->toArray() for counts
**Learning:** Found a performance bottleneck anti-pattern where existence and uniqueness checks were done by loading all matching records into PHP memory using `count(Model::where(...)->get()->toArray())`. This is very inefficient as tables grow large.
**Action:** Always use the database-level functions `->exists()` or `->count()` directly on the query builder instance instead.

## 2024-04-24 - Inefficient Collection Counting
**Learning:** In Laravel/Eloquent, checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is extremely inefficient as it loads all matching records into PHP memory as objects, converts them to arrays, and then counts them.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution without loading records into memory.

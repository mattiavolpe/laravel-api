## 2024-06-18 - Optimize Eloquent existence checks
**Learning:** In Laravel/Eloquent, avoid checking for record existence or counting records using `count(Model::where(...)->get()->toArray())`, as it inefficiently loads all matching records into PHP memory.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution.

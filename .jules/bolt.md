## 2024-05-15 - Eloquent query optimization
**Learning:** Checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into PHP memory.
**Action:** Always use database-level queries `->exists()` or `->count()` directly on the query builder to prevent memory exhaustion and speed up execution.
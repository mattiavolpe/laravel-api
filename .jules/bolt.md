## 2024-04-06 - Replacing collection counts with query builder count/exists
**Learning:** Checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` inefficiently loads all matching records into PHP memory.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution.
## 2024-04-29 - Avoid fetching models into memory for existence/count checks
**Learning:** In Laravel/Eloquent, checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is extremely inefficient as it loads all matching records into PHP memory, creating an array, and then counting it.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution. This significantly reduces PHP memory usage and executes a lightweight SQL `COUNT()` or `EXISTS` query.

## 2024-05-24 - Avoid Memory-Intensive Eloquent Count Methods
**Learning:** Checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is a performance bottleneck in Laravel because it inefficiently loads all matching records into PHP memory instead of executing a simple query.
**Action:** Always use database-level `->exists()` or `->count()` directly on the query builder for fast execution.

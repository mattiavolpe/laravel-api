## 2024-06-03 - [Optimize Eloquent Aggregations]
**Learning:** In Laravel, checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is extremely inefficient as it loads all matching records into PHP memory. This causes massive memory overhead and slow response times when data sets grow.
**Action:** Always use `->exists()` or `->count()` directly on the Eloquent query builder to ensure aggregations are performed efficiently at the database level.

## 2024-05-24 - Inefficient Eloquent Counting
**Learning:** Using `count(Model::where(...)->get()->toArray())` for existence or counting checks is highly inefficient as it loads all matching records into PHP memory instead of performing a fast database-level `EXISTS` or `COUNT` query.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution.

## 2024-05-18 - Optimize Eloquent record existence checks
**Learning:** The application occasionally fetches entire relationship collections into memory unnecessarily using `count(Model::where(...)->get()->toArray())`. This loads all matching records into PHP memory, causing significant overhead.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution.

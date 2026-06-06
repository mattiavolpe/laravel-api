## 2024-05-24 - Eloquent Memory Optimization

**Learning:** The application occasionally fetches entire relationship collections into memory unnecessarily (e.g., using `count(Model::where(...)->get()->toArray())` or `$projects->get()`) instead of utilizing efficient database-level query builder methods like `count()`, `exists()`, `first()`, or `latest()->first()`. This creates severe performance bottlenecks and memory bloat when scaling.
**Action:** Always prefer DB-level aggregations (`->count()`, `->exists()`, `->first()`) over loading Eloquent collections into PHP memory. Only call `->get()` when you genuinely need to iterate over all returned records.

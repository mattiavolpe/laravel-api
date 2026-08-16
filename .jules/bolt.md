## 2024-08-16 - Prevent in-memory hydration for existence checks
**Learning:** Checking for model existence using `count(Model::where(...)->get()->toArray())` hydrates entire collections into PHP memory.
**Action:** Use `->exists()` or `->count()` directly on the query builder to perform the check at the database level.

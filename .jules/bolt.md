## 2024-05-29 - Optimize Eloquent relationship counting

**Learning:** The application occasionally fetches entire collections into memory unnecessarily (e.g., using `count(Model::where(...)->get()->toArray())` in controllers like `ProjectController`, `TypeController`, or `TechnologyController`) instead of utilizing efficient database-level query builder methods like `count()` or `exists()`.

**Action:** Always use `->exists()` to check if any records exist, or `->count()` directly on the query builder to count records, rather than loading all matching records into PHP memory.
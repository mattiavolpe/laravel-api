## 2026-05-21 - Optimize Eloquent Query Execution

**Learning:** The application was fetching entire relationship collections into memory unnecessarily using `count(Model::where(...)->get()->toArray())` instead of utilizing efficient database-level query builder methods. This causes memory bloat and performance degradation, particularly on large datasets, as Eloquent loads all matching records into PHP memory to count them.

**Action:** Always use database-level methods like `->exists()` (when checking `> 0`) or `->count()` directly on the Eloquent query builder. This ensures the database performs the counting and only returns a single integer or boolean, avoiding the overhead of fetching and hydrating models in PHP memory.
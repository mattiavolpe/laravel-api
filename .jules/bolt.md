## 2024-05-29 - Eloquent Collection Memory Exhaustion
**Learning:** The codebase frequently uses `count(Model::where(...)->get()->toArray())` for existence and counting checks. This fetches all matching records into PHP memory, causing memory exhaustion and slowing down requests on large tables.
**Action:** Always replace this anti-pattern with `->exists()` for `> 0` checks and `->count()` for specific count checks to execute the query directly at the database level.

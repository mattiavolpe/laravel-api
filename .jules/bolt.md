## 2026-10-21 - Optimize Eloquent Exists/Count Checks
**Learning:** The codebase has a pattern of using `count(Model::where(...)->get()->toArray())` for existence and counting. This loads all records into PHP memory and converts them to arrays, causing severe memory bloat and slow execution times for large tables.
**Action:** Always use database-level `->exists()` for `> 0` checks and `->count()` for specific count checks to avoid pulling records into PHP memory.

## 2024-07-30 - Avoid pulling records into PHP memory for counting
**Learning:** This codebase incorrectly relies on the pattern `count(Model::where(...)->get()->toArray())` for counting or existence checks. This severely degraded performance as it forces Eloquent to fetch all records into PHP memory, instantiate objects, convert them to arrays, and count them in memory.
**Action:** When querying for existence, always use the database level `->exists()` instead of retrieving all records. For explicit counts, use `->count()` to perform a `COUNT(*)` query at the database level.

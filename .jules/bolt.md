## 2026-05-27 - Eloquent in-memory counting bottleneck
**Learning:** Checking record existence using `count(Model::where(...)->get()->toArray())` causes severe memory bloat because it fetches all matching rows from the database into PHP memory just to count them.
**Action:** Always use database-level aggregate methods like `->exists()` or `->count()` on the query builder for counting or existence checks.

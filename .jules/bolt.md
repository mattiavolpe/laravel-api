## 2024-07-17 - Optimize Eloquent Counts
**Learning:** The codebase heavily relies on pulling all matching records into a PHP array in memory using `count(Model::where(...)->get()->toArray())` just to check for existence or count records, which leads to massive memory bloat and performance degradation, especially as tables grow.
**Action:** Always use database-level execution methods like `->exists()` for `> 0` checks and `->count()` for specific count checks to avoid pulling records into PHP memory.

## 2025-02-18 - Avoid loading full collections for existence checks
**Learning:** Calling `count(Model::where(...)->get()->toArray())` loads the entire dataset into PHP memory just to count elements or check existence, which can lead to severe memory exhaustion on large tables.
**Action:** Always use database-level queries like `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize memory consumption and execution time.

## 2024-05-24 - Avoid Memory Exhaustion in Eloquent Counts
**Learning:** The codebase relies on loading entire collections into PHP memory using `count(Model::where(...)->get()->toArray())` just to count records or check existence, which is an anti-pattern that leads to severe memory exhaustion.
**Action:** Always replace these with database-level execution like `->exists()` for `> 0` checks and `->count()` for `> 1` specific count checks.

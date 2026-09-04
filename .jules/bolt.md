## 2024-09-04 - Stop Loading Collections for Counts
**Learning:** The codebase has an anti-pattern of using `count(Model::where(...)->get()->toArray())` to check for existence or count records, which loads entire collections into PHP memory causing significant memory and performance overhead.
**Action:** Always use database-level queries like `->exists()` for `> 0` checks, and `->count()` for specific count checks to avoid loading records into memory.

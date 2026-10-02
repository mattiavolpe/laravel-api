## 2024-05-24 - Optimize Eloquent count by executing directly at the database level
**Learning:** Using `count(Model::where(...)->get()->toArray())` for counting or existence checks pulls the entire collection into PHP memory, causing significant overhead and memory exhaustion.
**Action:** Use database-level query methods like `->exists()` for `> 0` checks, and `->count()` for specific count checks to reduce memory consumption and execution time.

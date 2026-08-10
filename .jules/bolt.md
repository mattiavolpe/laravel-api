## 2024-08-10 - Eloquent Collection Memory Exhaustion
**Learning:** The codebase frequently utilizes `count(Model::where(...)->get()->toArray())` for counting or existence checks. This pulls all records into PHP memory, creating significant overhead.
**Action:** Always use `->exists()` for `> 0` checks, and `->count()` for specific count checks to optimize performance and execute the query at the database level.

## 2024-05-24 - Database Level Existence Checks
**Learning:** The codebase manually checks for uniqueness by pulling all records into memory using `count(Model::where(...)->get()->toArray()) > 0`, causing a performance bottleneck and potential memory exhaustion.
**Action:** Always use `->exists()` for `> 0` checks and `->count()` for specific count checks to execute queries directly at the database level.

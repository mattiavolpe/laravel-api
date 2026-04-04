
## 2024-04-04 - [Performance Pattern] Avoid loading entire database results into memory for counting/existence checks
**Learning:** Checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is a severe performance anti-pattern found in multiple controllers in this codebase. It inefficiently executes a full `SELECT *` query and loads all matching records into PHP memory arrays just to count them.
**Action:** Always use `->exists()` or `->count()` directly on the query builder for fast, database-level execution (e.g., `SELECT COUNT(*)` or `EXISTS()`) without loading full models into memory.

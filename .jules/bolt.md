## 2024-07-25 - Optimize Eloquent Exists/Count Checks
**Learning:** Checking for model existence using `count(Model::where(...)->get()->toArray())` is a memory-intensive anti-pattern as it pulls all matched records into PHP memory only to count them.
**Action:** Instead, execute queries directly at the database level. Use `->exists()` for `> 0` existence checks, and `->count()` for specific threshold checks (like `> 1`) to prevent memory exhaustion and speed up database interactions.

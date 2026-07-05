## 2024-07-05 - [Optimize Eloquent existence checks]
**Learning:** Checking for model existence using `count(Model::where(...)->get()->toArray())` pulls all matching records into PHP memory, causing significant memory bloat and performance degradation, especially as tables grow.
**Action:** Use `Model::where(...)->exists()` to perform a lightweight `SELECT EXISTS(...)` directly at the database level, and `->count()` for specific numeric counts.

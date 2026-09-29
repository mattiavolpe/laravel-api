## 2024-05-15 - Optimize Eloquent existence checks
**Learning:** Using count(Model::where(...)->get()->toArray()) is extremely memory intensive as it loads entire collections into PHP memory just to check existence or count them.
**Action:** Always use database-level queries like ->exists() for > 0 checks and ->count() for specific counts to reduce memory consumption and execution time.

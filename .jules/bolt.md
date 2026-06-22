## 2026-06-22 - Optimize Eloquent existence checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` for existence or count checking is an anti-pattern that loads all records into PHP memory and severely impacts performance on large tables.
**Action:** Always execute queries directly at the database level using `->exists()` for "> 0" checks and `->count()` for specific count thresholds.

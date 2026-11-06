## 2024-05-24 - Avoid Memory-Intensive Count Checks
**Learning:** The codebase previously used `count(Model::where(...)->get()->toArray())` for existence and count checks. This anti-pattern pulls the entire result set into PHP memory, which can lead to memory exhaustion as the database grows.
**Action:** Replace these calls with database-level queries using `->exists()` for `> 0` checks and `->count()` for specific thresholds to significantly reduce processing overhead and memory usage.

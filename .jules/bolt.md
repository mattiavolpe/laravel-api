## 2024-10-31 - Optimize Eloquent existence and count checks
**Learning:** In Laravel/Eloquent, using `count(Model::where(...)->get()->toArray())` for existence or count checks is extremely inefficient because it pulls the entire result set into PHP memory before counting.
**Action:** Instead, use database-level queries like `->exists()` for `> 0` checks and `->count()` for specific thresholds to prevent memory exhaustion and reduce processing overhead.

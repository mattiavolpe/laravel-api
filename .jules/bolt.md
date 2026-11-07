## 2024-05-24 - Avoid get()->toArray() for Eloquent counts
**Learning:** In Laravel/Eloquent, avoid using `count(Model::where(...)->get()->toArray())` for existence or count checks, as it pulls the entire result set into PHP memory.
**Action:** Use database-level queries like `->exists()` for `> 0` checks and `->count()` for specific thresholds to prevent memory exhaustion and reduce processing overhead.

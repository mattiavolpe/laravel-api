## 2024-11-05 - Avoid fetching collections for count checks
**Learning:** In Laravel/Eloquent, using `count(Model::where(...)->get()->toArray())` to check for existence or count pulls the entire result set into PHP memory, causing significant overhead.
**Action:** Use database-level queries like `->exists()` for `> 0` checks and `->count()` for specific thresholds to prevent memory exhaustion and reduce processing overhead.

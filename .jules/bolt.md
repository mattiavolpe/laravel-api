## 2024-03-24 - Avoid fetching full result sets for existence checks
**Learning:** Found a codebase-specific anti-pattern where `count(Model::where(...)->get()->toArray())` was used for existence checks in multiple controllers, pulling entire result sets into PHP memory.
**Action:** Always use database-level queries like `->exists()` for `> 0` checks and `->count()` for specific thresholds to prevent memory exhaustion.

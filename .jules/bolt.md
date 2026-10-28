## 2024-10-28 - Optimize Eloquent existence checks
**Learning:** Found a codebase-specific anti-pattern where existence and threshold checks were performed by loading entire result sets into memory via `count(Model::where(...)->get()->toArray())`.
**Action:** Use database-level `exists()` and `count()` methods instead to prevent PHP memory exhaustion.

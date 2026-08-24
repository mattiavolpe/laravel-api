## 2024-05-24 - Eloquent Memory Exhaustion Anti-pattern
**Learning:** The codebase frequently uses `count(Model::where(...)->get()->toArray())` to check for record existence or uniqueness. This pulls all matching records into PHP memory, creating a significant bottleneck and risking memory exhaustion on large datasets.
**Action:** Always replace this pattern with direct database-level queries: use `->exists()` for `> 0` checks, and `->count()` for specific counts like `> 1`.

## 2024-10-16 - Prevent Memory Exhaustion from Eloquent Collections
**Learning:** The codebase relies on an anti-pattern: using count(Model::where(...)->get()->toArray()) > 0 for existence checks, which unnecessarily loads all matching models into memory before counting them, risking memory exhaustion on large datasets.
**Action:** Always replace memory-intensive collection counting with direct database-level queries using ->exists() for boolean checks and ->count() for specific thresholds.

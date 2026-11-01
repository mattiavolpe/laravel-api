## 2026-11-01 - Avoid memory exhaustion on count checks
**Learning:** Using count(Model::where(...)->get()->toArray()) pulls all matched records into PHP memory before counting them, which can cause memory exhaustion and slow response times on large datasets.
**Action:** Always use database-level exists() for > 0 checks and count() for thresholds to leverage the database engine's optimizations and avoid unnecessary hydration.

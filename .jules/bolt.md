## 2026-11-03 - Avoid loading entire collections for existence checks
**Learning:** Using count(Model::where(...)->get()->toArray()) for existence or count checks pulls the entire result set into PHP memory, causing memory exhaustion and execution overhead.
**Action:** Instead, use database-level queries like ->exists() for > 0 checks and ->count() for specific thresholds to prevent memory exhaustion and reduce processing overhead.

## 2026-05-12 - Eloquent Memory Inefficiency
**Learning:** Using count(Model::where(...)->get()->toArray()) unnecessarily fetches entire collections into memory before counting, which is a major performance bottleneck for large tables.
**Action:** Always use efficient database-level query builder methods like ->exists() or ->count() directly on the query builder instead of retrieving the full collection.

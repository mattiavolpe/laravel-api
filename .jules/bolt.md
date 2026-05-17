## 2024-05-30 - Optimize Eloquent collection counting
**Learning:** The application unnecessarily fetches entire relationship collections into PHP memory using `count(Model::where(...)->get()->toArray())` just to check for existence or count records, which is extremely inefficient for large datasets.
**Action:** Always use database-level query builder methods like `->exists()` or `->count()` directly to avoid loading Eloquent models into PHP memory.

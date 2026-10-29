## 2024-05-24 - Optimize Eloquent existence checks
**Learning:** In Laravel/Eloquent, using `count(Model::where(...)->get()->toArray())` for existence or count checks pulls the entire result set into PHP memory. This causes massive memory overhead and slow execution when the dataset is large.
**Action:** Always use database-level methods like `->exists()` for "> 0" checks, or `->count()` for checking specific thresholds (like "> 1"), to let the database handle the aggregation efficiently.

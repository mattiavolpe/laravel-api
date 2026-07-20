## 2024-07-20 - Optimize Eloquent existence checks
**Learning:** Checking for existence using `count(Model::where(...)->get()->toArray()) > 0` loads all matching records into memory as collections, converts them to arrays, and counts them in PHP. This causes major memory/performance issues at scale.
**Action:** Replace with `$model::where(...)->exists()` for boolean checks (where applicable) or `$model::where(...)->count() > 1` when specific count checks are needed, pushing the workload directly to the database level.

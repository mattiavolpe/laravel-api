## 2024-06-23 - Optimize Eloquent Exists and Count Checks
**Learning:** The codebase has a recurring anti-pattern where records are pulled into PHP memory using `count(Model::where(...)->get()->toArray())` just to check for existence or count records. This causes severe memory exhaustion and slow execution for large datasets.
**Action:** Replace `> 0` checks with `->exists()` and specific count checks with `->count()` to push the workload to the database layer.

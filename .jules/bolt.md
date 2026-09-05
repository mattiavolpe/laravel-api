## 2024-05-24 - Eloquent Collection Counting Bottleneck
**Learning:** The codebase previously used `count(Model::where(...)->get()->toArray()) > 0` for existence checks, which loads the entire result set into PHP memory before counting. This causes severe memory exhaustion and slow response times for large datasets.
**Action:** Always use database-level aggregations like `->exists()` for boolean checks and `->count()` when the actual number is needed.

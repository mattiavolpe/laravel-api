## 2024-07-10 - Eloquent Collection Count Optimization
**Learning:** Using `count(Model::where(...)->get()->toArray())` pulls all matching records into PHP memory and iterates through them to convert to an array just to count them. This is highly inefficient and risks memory exhaustion on large tables.
**Action:** Always execute existence/count checks directly at the database level using `->exists()` (for `> 0`) or `->count()` (for `> 1`) to optimize performance and memory usage.

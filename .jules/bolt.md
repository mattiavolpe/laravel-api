## 2024-05-01 - Optimize Eloquent Exists and Count Checks
**Learning:** Using `count(Model::where(...)->get()->toArray()) > 0` pulls all matching records into PHP memory, causing memory exhaustion and poor performance.
**Action:** Use database-level queries `->exists()` for `> 0` checks, and `->count() > 1` for specific count checks to optimize performance and prevent memory exhaustion.

## 2024-05-24 - Eloquent Memory Exhaustion with Array Counts
**Learning:** Fetching full record sets into PHP arrays with `get()->toArray()` just to count them causes severe memory exhaustion, especially on large tables.
**Action:** Always use Eloquent's native aggregation methods like `->exists()` for existence checks and `->count()` for numeric bounds checks to execute directly at the database level.

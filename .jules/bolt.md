## 2024-05-23 - Optimize Eloquent Exists/Count Queries
**Learning:** Using `count(Model::where(...)->get()->toArray())` is highly inefficient because it fetches the entire collection into PHP memory, hydrates models, converts them to an array, and then counts the array.
**Action:** Always use database-level queries like `->exists()` (for checking `> 0`) or `->count()` (for exact counts or `> 1`) directly on the Eloquent query builder.

## 2026-04-21 - Prevent memory exhaustion when counting records
**Learning:** Loading all matched Eloquent records into memory with `->get()->toArray()` just to count them is a severe anti-pattern in Laravel applications, especially for operations like checking uniqueness constraints. This pattern bypasses database optimizations and scales linearly in memory usage with the number of records.
**Action:** Always use `->exists()` or `->count()` directly on the query builder to allow the database to perform the counting/existence check natively, returning only a boolean or integer to PHP.

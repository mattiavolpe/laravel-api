## 2024-05-24 - Efficient Record Counting in Laravel
**Learning:** The application was fetching entire relationship collections into memory (e.g. `count(Model::where(...)->get()->toArray())`) to check for existence or count records, which is a significant performance bottleneck.
**Action:** Use database-level query builder methods like `exists()` or `count()` directly on the query to prevent loading all matching records into PHP memory.

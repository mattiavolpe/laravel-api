## 2024-04-17 - [Inefficient Record Existence/Count Checks]
**Learning:** Found multiple instances where existence or record counting was being checked via `count(Model::where(...)->get()->toArray())`. This is highly inefficient as it queries all records, loads them into PHP memory as objects, converts them into an array, and then counts the array.
**Action:** Always use `->exists()` or `->count()` directly on the query builder to perform the aggregation entirely at the database level and avoid unnecessary data transmission and memory usage.

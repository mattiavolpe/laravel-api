## 2024-05-26 - Optimize Eloquent existence and count checks
**Learning:** The application was inefficiently fetching entire collections into memory using `count(Model::where(...)->get()->toArray())` just to check if records exist or to count them. This scales poorly as it loads all matching records into PHP memory and hydrates models unnecessarily.
**Action:** Always use fast, database-level query builder methods like `exists()` or `count()` directly on the query builder instead of retrieving the records first.

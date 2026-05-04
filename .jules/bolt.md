## 2024-05-04 - Optimize Eloquent Exists/Count Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` is a performance anti-pattern because it inefficiently loads all matching records into PHP memory and converts them to arrays.
**Action:** Always use database-level methods `->exists()` for checking if any records exist or `->count()` for counting matching records directly on the Eloquent query builder.

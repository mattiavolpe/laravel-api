## 2024-06-19 - Use Eloquent exists() and count() for existence checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` is highly inefficient as it loads all matching records into PHP memory just to check existence or count them.
**Action:** Always use `->exists()` or `->count()` directly on the Eloquent query builder to execute the check at the database level.

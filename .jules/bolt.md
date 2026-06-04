## 2024-06-04 - Inefficient Eloquent Count
**Learning:** Checking for existence or counting models using `count(Model::where(...)->get()->toArray())` is extremely inefficient as it loads all matching records into PHP memory as arrays.
**Action:** Always use database-level query methods `->exists()` for existence checks and `->count()` for counting matching records directly on the database.

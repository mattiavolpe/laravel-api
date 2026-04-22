## 2024-05-24 - Eloquent Existence & Count Checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` for simple record existence or count checks is highly inefficient as it loads all matching models into PHP memory and incurs the overhead of converting them to arrays.
**Action:** Always utilize Eloquent's database-level aggregate methods like `->exists()` and `->count()` directly on the query builder to minimize memory consumption and improve execution speed.

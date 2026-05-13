## 2024-06-19 - Optimize Eloquent record existence checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` is a major performance anti-pattern because it unnecessarily loads all matching database rows into PHP memory and converts them to arrays just to count them.
**Action:** Always use database-level methods like `->exists()` to check for any records, or `->count()` to get the number of records directly from the database query builder without fetching full models.

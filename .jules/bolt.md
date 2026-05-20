## 2024-05-15 - Eloquent memory exhaustion
**Learning:** The application was fetching entire relationship collections into memory using `count(Model::where(...)->get()->toArray())` to check for record existence or count, which inefficiently loads all matching records into PHP memory.
**Action:** Always use efficient database-level query builder methods like `->exists()` or `->count()` directly on the query builder, and retrieve specific records like `->first()` or `->latest()->first()` instead of fetching everything.

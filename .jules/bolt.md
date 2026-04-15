## 2024-04-15 - Optimize database record existence checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` inefficiently loads all matching database records into PHP memory just to check existence or count them. This is a significant codebase-specific performance anti-pattern.
**Action:** Always use fast, database-level queries like `->exists()` and `->count()` directly on the Eloquent query builder.

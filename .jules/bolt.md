## 2024-05-01 - Avoid fetching all records into memory to count them
**Learning:** Checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is highly inefficient. It fetches all matching records from the database, hydrates them into Eloquent models, and converts them to an array in PHP memory just to count them.
**Action:** Always use the database-level functions `->exists()` (when checking if > 0) or `->count()` directly on the query builder for fast execution without memory overhead.

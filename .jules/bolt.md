## 2024-04-27 - Inefficient count operations on queries

**Learning:** Checking for record existence or counting records using `count(Model::where(...)->get()->toArray())` is highly inefficient. It fetches all matching records from the database, builds Eloquent models, converts them to arrays, and then counts the array size in PHP memory. This causes massive memory overhead for large datasets.

**Action:** Always use database-level checking: `->exists()` for checking if *any* records match, and `->count()` for counting matching records directly on the database side without retrieving the full rows.

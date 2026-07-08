## 2024-07-08 - [Optimize Eloquent Existence Checks]
**Learning:** Checking for model existence by calling `count(Model::where(...)->get()->toArray())` causes all matching records to be fetched from the database, hydrated into Eloquent models, and converted to arrays in memory, leading to memory bloat and performance degradation, particularly on large tables.
**Action:** Always use the Eloquent `->exists()` method for simple boolean checks, and `->count()` for specific numeric counts. This pushes the logic to the database layer, significantly reducing memory usage and transfer time.

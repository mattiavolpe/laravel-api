## 2024-05-23 - [Optimizing Eloquent Count Checks]
**Learning:** Checking for record existence or counting records by using `count(Model::where(...)->get()->toArray())` pulls all matched records into PHP memory, creating Eloquent models and converting them to arrays, which severely degrades performance and memory usage.
**Action:** Always use `->exists()` for checking existence (`> 0`) and `->count()` for specific counts (`> 1`) to execute queries directly at the database level.

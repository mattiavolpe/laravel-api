## 2024-11-20 - Optimize Eloquent existence and count checks
**Learning:** Using `count(Model::where(...)->get()->toArray())` is extremely inefficient as it pulls all records into PHP memory, instantiates Models, converts to arrays, just to count them.
**Action:** Always use `->exists()` for checking if records exist (`> 0`) and `->count()` for specific count checks (`> 1`) to execute the query directly at the database level.

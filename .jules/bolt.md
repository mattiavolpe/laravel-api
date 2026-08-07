## 2023-10-26 - Optimize Eloquent checks directly at database level
**Learning:** Using `count(Model::where(...)->get()->toArray())` pulls all matching records into PHP memory just to check existence or count them. This can cause memory exhaustion and N+1 performance issues in Laravel applications when handling large datasets.
**Action:** Always execute queries directly at the database level by using `->exists()` for checking existence (`> 0`) and `->count()` for specific count checks to optimize performance.

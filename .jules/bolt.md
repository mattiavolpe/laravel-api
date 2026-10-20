## 2024-05-19 - Optimize exist/count checks in Eloquent
**Learning:** Checking for existence or counting using `count(Model::where(...)->get()->toArray())` pulls all matching records into PHP memory and converts them to arrays, which is highly inefficient.
**Action:** Use `Model::where(...)->exists()` for checking existence (`> 0`) and `Model::where(...)->count() > 1` for count specific checks to run queries efficiently at the database level.

## 2023-07-06 - Optimize Eloquent Exists Check
**Learning:** Using `count(Model::where(...)->get()->toArray()) > 0` or `> 1` pulls all records into PHP memory, causing significant overhead for existence or exact count checks.
**Action:** Replace `->get()->toArray()` with `->exists()` for checking existence (`> 0`) or `->count() > 1` for exact counts directly at the database level to optimize memory and query performance.

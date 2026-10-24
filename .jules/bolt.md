## 2024-10-24 - Database queries over PHP memory arrays
**Learning:** Using `count(Model::where(...)->get()->toArray())` is a major performance bottleneck as it pulls the entire result set into PHP memory before counting.
**Action:** Use database-level queries like `->exists()` for checking if records exist (`> 0`) and `->count()` for specific count checks (`> 1`).
